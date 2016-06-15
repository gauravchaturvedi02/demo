#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
#include<time.h>
#include<graphics.h>
int tc1[2],tc2[2],user=1,flag=1,life=3,speed=100,level=1,flag2=0,progress=0,pf;
long int score=-100;
typedef struct
{
	char  pname[20];
	long int pscore;
	int prank;
}player;
void checkprog()
{
	switch(level)
	{
		case 1:
			pf=300/13;
			progress+=pf;
			break;
		case 2:
			pf=300/16;
			progress+=pf;
			break;
		case 3:
			pf=300/21;
			progress+=pf;
			break;
		case 4:
			pf=300/31;
			progress+=pf;
			break;
		case 5:
			pf=300/62;
			progress+=pf;
			break;
		case 6:
			pf=300/125;
			progress+=pf;
			break;
	}
}
void gentc2()
{
	tc2[0]=0;
	randomize();
	if(tc1[1]==0)
	{
		if(random(100)%2==0)
			tc2[1]=1;
		else
			tc2[1]=2;
	}
	else if(tc1[1]==2)
	{
		if(random(100)%2==0)
			tc2[1]=1;
		else
			tc2[1]=0;
	}
	else
		if(random(100)%2==0)
			tc2[1]=2;
		else
			tc2[1]=0;
	score+=(100*level);
}
void inittc1()
{
	randomize();
	tc1[0]=0;
	tc1[1]=random(3);
	gentc2();
}
void checktc()
{
	if(tc1[0]>7)
	{
		inittc1();
		checkprog();
	}
}
void movetc(int tc[2])
{
	tc[0]++;
	if(tc[0]==7&&tc[1]==user)
	{
		life--;
		score-=100;
		progress-=pf;
		return;
	}
}
void moveuser(int ch)
{
	if(ch=='a')
	{
		if(user<1)
			return;
		user--;
	}
	else if(ch=='d')
	{
		if(user>1)
			return;
		user++;
	}

}
void trees(int x,int y,int c1,int c2)
{
	setcolor(c2);
	rectangle(x+20,y+45,x+30,y+87);
	setfillstyle(SOLID_FILL,c2);
	floodfill(x+25,y+80,c2);
	setcolor(c1);
	setfillstyle(SOLID_FILL,c1);
	rectangle(x+10,y+21,x+40,y+45);
	floodfill(x+11,y+33,c1);
	circle(x+25,y+21,15);
	circle(x+25,y+45,15);
	floodfill(x+25,y+20,c1);
	floodfill(x+25,y+46,c1);


}
void setupg()
{
	setcolor(2);
	rectangle(0,20,213,479);
	rectangle(426,0,639,479);
	rectangle(125,0,213,21);
	setfillstyle(SOLID_FILL,2);
	floodfill(1,41,2);
	floodfill(500,41,2);
	floodfill(126,1,2);

}
void rprog()
{
	setcolor(RED);
	setfillstyle(SOLID_FILL,RED);
	rectangle(585,100,630,400);
	rectangle(585,100,630,400-progress);
	if(progress>=2)
		floodfill(600,400-(progress-1),RED);
	setcolor(0);
	setfillstyle(0,0);
	rectangle(585,80,630,100);
	floodfill(600,90,0);
	settextstyle(0,0,1);
	setcolor(RED);
	outtextxy(585,85,"FINISH");
}

void updatesl()
{
	gotoxy(1,1);
	printf("LIVES:%d\tSCORE:%ld",life,score);
	rprog();
}
void looseseq()
{
	cleardevice();
	outtextxy(300,200,"GAME OVER");
}
void usercarg(int c,int c2,int c3)
{
	int i,a[18];
	i=user*71+218;
	setcolor(c);
	setfillstyle(SOLID_FILL,c);
	rectangle(i,435,i+7,445);
	rectangle(i+53,435,i+60,445);
	rectangle(i,455,i+7,465);
	rectangle(i+53,455,i+60,465);
	floodfill(i+1,436,c);
	floodfill(i+54,436,c);
	floodfill(i+1,456,c);
	floodfill(i+54,456,c);
	//tyres
	a[0]=i+17;
	a[1]=420;
	a[2]=i+7;
	a[3]=435;
	a[4]=i+7;
	a[5]=465;
	a[6]=i+17;
	a[7]=479;
	a[8]=i+45;
	a[9]=479;
	a[10]=i+53;
	a[11]=465;
	a[12]=i+53;
	a[13]=435;
	a[14]=i+45;
	a[15]=420;
	a[16]=i+17;
	a[17]=420;
	setcolor(c2);
	setfillstyle(SOLID_FILL,c2);
	drawpoly(9,a);
	floodfill(i+30,450,c2);
	//body
	setcolor(c3);
	setfillstyle(SOLID_FILL,c3);
	rectangle(i+14,435,i+46,465);
	floodfill(i+15,436,c3);
	//glass
}

void traffcarg(int c,int c2,int c3)
{
	int i1,i2,j1,j2;
	int a[18];
	i1=tc1[1]*71+218;
	j1=tc1[0]*60;
	i2=tc2[1]*71+218;
	j2=tc2[0]*60;
	setcolor(c);
	setfillstyle(SOLID_FILL,c);
	rectangle(i1,j1+15,i1+7,j1+25);
	rectangle(i1+53,j1+15,i1+60,j1+25);
	rectangle(i1,j1+35,i1+7,j1+45);
	rectangle(i1+53,j1+35,i1+60,j1+45);
	floodfill(i1+1,j1+16,c);
	floodfill(i1+54,j1+16,c);
	floodfill(i1+1,j1+36,c);
	floodfill(i1+54,j1+36,c);
	//tyres car1
	rectangle(i2,j2+15,i2+7,j2+25);
	rectangle(i2+53,j2+15,i2+60,j2+25);
	rectangle(i2,j2+35,i2+7,j2+45);
	rectangle(i2+53,j2+35,i2+60,j2+45);
	floodfill(i2+1,j2+16,c);
	floodfill(i2+54,j2+16,c);
	floodfill(i2+1,j2+36,c);
	floodfill(i2+54,j2+36,c);
	//tyre car2
	a[0]=i1+17;
	a[1]=j1;
	a[2]=i1+7;
	a[3]=j1+15;
	a[4]=i1+7;
	a[5]=j1+45;
	a[6]=i1+17;
	a[7]=j1+60;
	a[8]=i1+45;
	a[9]=j1+60;
	a[10]=i1+53;
	a[11]=j1+45;
	a[12]=i1+53;
	a[13]=j1+15;
	a[14]=i1+45;
	a[15]=j1;
	a[16]=i1+17;
	a[17]=j1;
	setcolor(c2);
	setfillstyle(SOLID_FILL,c2);
	drawpoly(9,a);
	floodfill(i1+30,j1+30,c2);
	//body car1
	a[0]=i2+17;
	a[1]=j2;
	a[2]=i2+7;
	a[3]=j2+15;
	a[4]=i2+7;
	a[5]=j2+45;
	a[6]=i2+17;
	a[7]=j2+60;
	a[8]=i2+45;
	a[9]=j2+60;
	a[10]=i2+53;
	a[11]=j2+45;
	a[12]=i2+53;
	a[13]=j2+15;
	a[14]=i2+45;
	a[15]=j2;
	a[16]=i2+17;
	a[17]=j2;
	setcolor(c2);
	setfillstyle(SOLID_FILL,c2);
	drawpoly(9,a);
	floodfill(i2+30,j2+30,c2);
	//body car2
	setcolor(c3);
	setfillstyle(SOLID_FILL,c3);
	rectangle(i1+14,j1+15,i1+46,j1+45);
	floodfill(i1+15,j1+16,c3);
	//glass car1
	rectangle(i2+14,j2+15,i2+46,j2+45);
	floodfill(i2+15,j2+16,c3);
	//glass car2
}
void movetrees(int x1,int y1)
{       int i,a[10];
	a[0]=x1;
	a[1]=0;
	a[2]=x1;
	a[3]=480;
	a[4]=x1+50;
	a[5]=480;
	a[6]=x1+50;
	a[7]=0;
	a[8]=x1;
	a[9]=0;
	setcolor(2);
	setfillstyle(SOLID_FILL,2);
	fillpoly(5,a);
	for(i=0;i<6;i++)
	{
		trees(x1,y1,LIGHTGREEN,BROWN);
		y1+=92;
	}
}
void nextlevel()
{
	cleardevice();
	settextstyle(0,0,1);
	setcolor(YELLOW);
	switch(level)
	{
		case 1:
			outtextxy(300,200,"LEVEL 1");
			outtextxy(295,210,"BEGINNER");
			flag2=1;
			progress=0;
			break;
		case 2:
			outtextxy(300,200,"LEVEL 2");
			outtextxy(290,210,"SEMI-PRO");
			flag2=1;
			progress=0;
			break;
		case 3:
			outtextxy(300,200,"LEVEL 3");
			outtextxy(280,210,"PROFESSIONAL");
			flag2=1;
			progress=0;
			break;
		case 4:
			outtextxy(300,200,"LEVEL 4");
			outtextxy(290,210,"LEGENDARY");
			flag2=1;
			progress=0;
			break;
		case 5:
			outtextxy(300,200,"LEVEL 5");
			outtextxy(300,210,"INSANE");
			flag2=1;
			progress=0;
			break;
		case 6:
			outtextxy(300,200,"LEVEL 6");
			outtextxy(290,210,"UNBEATABLE");
			flag2=1;
			progress=0;
			break;
	}
}
void displayhof()
{
	FILE *f1;
	char name[20];
	int i=1;
	f1=fopen("hfame.txt","r");
	cleardevice();
	setcolor(YELLOW);
	settextstyle(1,0,5);
	outtextxy(180,35,"HALL OF FAME");
	setlinestyle(DASHED_LINE,0,3);
	rectangle(170,40,480,90);
	settextstyle(0,0,1);
	while(fgets(name,20,f1))
	{
		outtextxy(50,(10*i)+150,name);
	}
	fclose(f1);
	getch();
}
void halloffame()
{
	FILE *f1;
	char name[20];
	f1=fopen("hfame.txt","a");
	cleardevice();
	printf("Enter Your Name:");
	scanf("%s",&name);
	fputs(name,f1);
	fclose(f1);
	displayhof();
}
void winseq()
{
	cleardevice();
	settextstyle(0,0,7);
	outtextxy(100,100,"CONGRATULATIONS");
	outtextxy(100,150,"YOU WIN");
	delay(3000);
	halloffame();
}
void checklevel()
{
	if(score>=129400)
	{
		winseq();
	}
	if(score>54380)
	{
		if(level<6)
		{
			speed=10;
			level=6;
			nextlevel();
		}
	}
	else if(score>23130)
	{
		if(level<5)
		{
			speed=20;
			level=5;
			nextlevel();
		}
	}
	else if(score>10630)
	{
		if(level<4)
		{
			speed=40;
			level=4;
			nextlevel();
		}
	}
	else if(score>4375)
	{
		if(level<3)
		{
			speed=60;
			level=3;
			nextlevel();
		}
	}
	else if(score>1250)
	{
		if(level<2)
		{
			speed=80;
			level=2;
			nextlevel();
		}
	}
}
void cursorg(int cursor,int c)
{
	setcolor(c);
	setfillstyle(SOLID_FILL,c);
	rectangle(234,cursor-2,240,cursor+4);
	floodfill(237,cursor,c);
}
void dhscore()
{
	int y=150,i;
	FILE *f1;
	player p1[5];
	char score[20],rank[1];
	f1=fopen("hscore.txt","r");
	cleardevice();
	setcolor(YELLOW);
	settextstyle(1,0,5);
	outtextxy(200,35,"HIGHSCORES");
	setlinestyle(DASHED_LINE,0,3);
	rectangle(190,40,450,90);
	settextstyle(0,0,1);
	fread(&p1,sizeof(player),5,f1);
	for(i=0;i<5;i++)
	{
		ltoa(p1[i].pscore,score,10);
		itoa(p1[i].prank,rank,10);
		outtextxy(50,y,rank);
		outtextxy(80,y,p1[i].pname);
		outtextxy(150,y,score);
		y+=10;
	}
	flushall();
	getch();
}

void highscore()
{
	FILE *f1;
	int rank,f,i,f2=0;
	player p1[5],temp,temp2;
	f1=fopen("hscore.txt","r");
	fread(&p1,sizeof(player),5,f1);
	for(f=0;f<5;f++)
	{
		if(p1[f].pscore<score)
		{
			f2=1;
			break;
		}
	}
	if(f2==1)
	{
		temp=p1[f];
		cleardevice();
		settextstyle(1,0,5);
		outtextxy(100,100,"CONGRATULATIONS!!");
		outtextxy(100,160,"NEW HIGHSCORE");
		settextstyle(0,0,1);
		outtextxy(100,220,"ENTER NAME:");
		gotoxy(500,420);
		scanf("%s",p1[f].pname);
		p1[f].prank=rank;
		p1[f].pscore=score;
		for(i=f+1;i<5;i++)
		{
			temp2=p1[i];
			p1[i]=temp;
			temp=temp2;
		}
		fclose(f1);
		f1=fopen("hscore.txt","w");
		fwrite(&p1,sizeof(player),10,f1);
		fclose(f1);
	}
	flushall();
	dhscore();
}
void cfiles()
{
	FILE *f1;
	f1=fopen("hfame.txt","w");
	fclose(f1);
}
void menug()
{
	int cursor=250,ch;
	while(1)
	{
		cleardevice();
		setcolor(YELLOW);
		setfillstyle(LTBKSLASH_FILL,YELLOW);
		rectangle(120,100,520,200);
		rectangle(130,110,510,190);
		floodfill(121,101,YELLOW);
		settextstyle(1,0,5);
		outtextxy(180,120,"ROAD RUNNER");
		settextstyle(0,0,1);
		outtextxy(270,250,"Play Game");
		outtextxy(270,260,"Hall Of Fame");
		outtextxy(270,270,"Highscore");
		outtextxy(270,280,"Quit");
		cursorg(cursor,YELLOW);
		ch=getch();
		if(ch=='w'&&cursor>250)
		{
			cursorg(cursor,0);
			cursor-=10;
		}
		else if(ch=='s'&&cursor<280)
		{
			cursorg(cursor,0);
			cursor+=10;
		}
		else if(ch==13)
		{
			if(cursor==250)
				return;
			else if(cursor==260)
			{
				displayhof();
				exit(0);
			}
			else if(cursor==270)
			{
				dhscore();
				exit(0);
			}
			else if(cursor==280)
				exit(0);
		}
		cursorg(cursor,YELLOW);
	}
}
void countdown()
{
	int i=3;
	cleardevice();
	settextstyle(1,0,7);
	while(i>=0)
	{
		if(i==3)
			outtextxy(300,190,"3");
		else if(i==2)
			outtextxy(300,190,"2");
		else if(i==1)
			outtextxy(300,190,"1");
		else if(i==0)
			outtextxy(280,190,"GO!!");
		delay(1000);
		cleardevice();
		i--;
	}
}
void instruct()
{
	cleardevice();
	printf("\t\t\t\tINSTRUCTIONS");
	printf("\n\t\t\t\t------------");
	printf("\n\n\nOBJECTIVE");
	printf("\n---------");
	printf("\n\nFinish the race without crashing your car three times.");
	printf("\n\n\nCONTROLS");
	printf("\n--------");
	printf("\n\nPress 'A' to move left and 'D' to move right.");
	printf("\n\n\n\n\t\t\tPress any key to continue...");
	getch();
}
void logo()
{
	int w[10];
	w[0]=220;
	w[1]=80;
	w[2]=180;
	w[3]=200;
	w[4]=460;
	w[5]=200;
	w[6]=420;
	w[7]=80;
	w[8]=220;
	w[9]=80;
	cleardevice();
	setcolor(LIGHTBLUE);
	setfillstyle(SOLID_FILL,LIGHTBLUE);
	drawpoly(5,w);
	floodfill(21,221,LIGHTBLUE);
	setcolor(RED);
	setfillstyle(SOLID_FILL,RED);
	rectangle(120,200,520,400);
	floodfill(121,201,RED);
	setcolor(YELLOW);
	setfillstyle(SOLID_FILL,YELLOW);
	circle(180,300,40);
	circle(460,300,40);
	floodfill(180,300,YELLOW);
	floodfill(460,300,YELLOW);
	setcolor(LIGHTGRAY);
	setfillstyle(XHATCH_FILL,LIGHTGRAY);
	rectangle(250,275,390,325);
	floodfill(251,276,LIGHTGRAY);
	settextstyle(0,0,2);
	setcolor(0);
	outtextxy(240,420,"ROAD RUNNER");
	getch();
}
void main()
{
	int ch,gd=DETECT,gm,y1=-92;
	clrscr();
	initgraph(&gd,&gm,"C:\TURBOC3\BGI");
	inittc1();
       //cfiles();
	logo();
	menug();
	instruct();
	cleardevice();
	nextlevel();
	anchor:
	flag2=0;
	delay(2000);
	countdown();
	cleardevice();
	setcolor(7);
	setfillstyle(SOLID_FILL,7);
	rectangle(213,0,426,479);
	floodfill(214,1,7);
	traffcarg(0,4,9);
	flushall();
	setupg();
	movetrees(163,y1);
	movetrees(426,y1);
	while(flag==1)
	{
		y1=y1+60;
		if(y1>0)
			y1=-92;
		usercarg(0,14,9);
		traffcarg(7,7,7);
		movetc(tc1);
		movetc(tc2);
		checktc();
		movetrees(163,y1);
		movetrees(426,y1);
		updatesl();
		traffcarg(0,4,9);
		checklevel();
		if(flag2==1)
			goto anchor;
		delay(speed);
		if(kbhit())
		{
			usercarg(7,7,7);
			ch=getch();
			moveuser(ch);
			if(ch==27)
				break;
			usercarg(0,14,9);
		}
		if(life==0)
			flag=0;
	}
	if(flag==0)
	{
		flushall();
		looseseq();
		highscore();
		displayhof();
	}
	getch();
	closegraph();
}