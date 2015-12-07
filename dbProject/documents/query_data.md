
### Title: Commuter Airline Test Queries
### Team: Rohan Kulkarni,Nandakishore Tokala,Majesh Reddy Salla

#### Question 1:
Show all passengers

SQL:
```
SELECT * 
FROM  `Users` 
WHERE  `RoleID` = ( 
SELECT  `RoleID` 
FROM  `Roles` 
WHERE  `Title` =  'Passenger' ) 
LIMIT 0 , 30 
```

#### Answer:
```
UUID	Email	LastName	FirstName	StreetAddress	City	State	ZipCode	Password	ContactPhone	RoleID	
1437765062	dwayne.gregory@example.com	gregory	dwayne	5115 pockrus page rd	tamworth	northern territory	65792	beefcake	02-5614-4667	0
1434832585	fernando.barnes@example.com	barnes	fernando	8091 groveland terrace	hobart	australian capital territory	27228	44444	04-6569-3907	0
1434428156	ronnie.wheeler@example.com	wheeler	ronnie	4824 oak ridge ln	hervey bay	queensland	91156	bull	00-5516-2991	0
1434163859	mathew.schmidt@example.com	schmidt	mathew	3791 stevens creek blvd	ballarat	new south wales	58734	jerome	02-5866-1824	0
1433751202	ramon.robinson@example.com	robinson	ramon	1470 first street	sunshine coast	south australia	94075	bbbb	04-4885-6018	0
1433205344	clara.ryan@example.com	ryan	clara	8742 locust rd	kalgoorlie	northern territory	35766	maserati	07-8478-6438	0
1432898925	stanley.mcdonalid@example.com	mcdonalid	stanley	4720 w belt line rd	kalgoorlie	australian capital territory	74393	grease	02-7340-6214	0
1432876242	shannon.pena@example.com	pena	shannon	8962 photinia ave	kalgoorlie	tasmania	19663	1101	01-3188-3604	0
1431490151	brian.neal@example.com	neal	brian	9162 crockett st	tweed	tasmania	31225	eduardo	06-4453-6376	0
1431329580	lily.perez@example.com	perez	lily	3239 sunset st	kalgoorlie	victoria	16162	123321	04-2469-4002	0
1430570295	rita.carlson@example.com	carlson	rita	5982 saddle dr	bendigo	western australia	33536	susanne	07-6769-4499	0
1430289310	virgil.andrews@example.com	andrews	virgil	6794 college st	nowra	western australia	77094	killjoy	07-7998-2283	0
1428770221	morris.stone@example.com	stone	morris	8803 hogan st	hervey bay	south australia	86254	hhhhh	03-8288-4063	0
1426797595	alfredo.castro@example.com	castro	alfredo	4659 mcgowen st	orange	queensland	30884	underwear	08-0880-7035	0
1426306091	andre.williamson@example.com	williamson	andre	2679 preston rd	rockhampton	queensland	12252	booboo	09-5270-7137	0
1426264243	antonio.allen@example.com	allen	antonio	3128 fairview st	launceston	northern territory	54688	gocubs	03-9156-2299	0
1426109637	tammy.arnold@example.com	arnold	tammy	6461 e sandy lake rd	coffs harbour	south australia	68225	book	05-1899-4853	0
1425842294	jill.martin@example.com	martin	jill	8835 frances ct	mackay	australian capital territory	46629	kodiak	03-4722-1587	0
1425717789	clara.pierce@example.com	pierce	clara	3286 hogan st	shepparton	south australia	14061	crow	05-8884-3192	0
1423291013	lydia.kuhn@example.com	kuhn	lydia	4066 sunset st	traralgon	south australia	80289	bongo	04-1402-1661	0
1422925721	darlene.herrera@example.com	herrera	darlene	7657 w campbell ave	geelong	australian capital territory	63297	heynow	08-4762-9830	0
1422867084	juan.wheeler@example.com	wheeler	juan	7194 adams st	wollongong	australian capital territory	20723	knight	05-0831-8496	0
1422091249	sara.king@example.com	king	sara	9563 rolling green rd	orange	tasmania	12145	herman	00-0589-5957	0
1422026912	brennan.ferguson@example.com	ferguson	brennan	1273 fairview st	rockhampton	south australia	50442	pepsi	03-5694-5902	0
1421906460	brad.hunter@example.com	hunter	brad	6104 daisy dr	tamworth	australian capital territory	64560	speedway	07-1895-0012	0
1421483990	vincent.bailey@example.com	bailey	vincent	5238 hamilton ave	geraldton	northern territory	79017	9999999	05-4419-8400	0
1421270049	alex.jacobs@example.com	jacobs	alex	7673 mockingbird ln	mildura	south australia	19837	beatrice	00-4862-9031	0
1421114929	wanda.jones@example.com	jones	wanda	9033 ash dr	cairns	south australia	20084	phoenix	07-4244-6828	0
1420911990	edward.martin@example.com	martin	edward	7975 mockingbird hill	port macquarie	northern territory	62882	burn	04-7164-0410	0
1420664692	shane.gray@example.com	gray	shane	5661 lone wolf trail	warrnambool	northern territory	48753	f**k	06-9125-0201	0
```

#### Question 2:
Show all administrators that have access

SQL:
```
SELECT * 
FROM  `Users` 
WHERE  `RoleID` = ( 
SELECT  `RoleID` 
FROM  `Roles` 
WHERE  `Title` =  'Administrator' ) 
LIMIT 0 , 30
```

#### Answer:
```
UUID	Email	LastName	FirstName	StreetAddress	City	State	ZipCode	Password	ContactPhone	RoleID	
1399107914	antonio.nguyen@example.com	nguyen	antonio	1046 w 6th st	dubbo	tasmania	48714	cola	05-6522-1370	1
1384811140	marian.stewart@example.com	stewart	marian	8573 samaritan dr	coffs harbour	western australia	29256	jockey	06-3836-6292	1
1317062706	jared.olson@example.com	olson	jared	3321 valley view ln	traralgon	south australia	97329	briana	07-7469-2297	1
1304928430	carmen.matthews@example.com	matthews	carmen	6745 adams st	bunbury	south australia	16620	98765	00-3789-4804	1
1301852521	sofia.payne@example.com	payne	sofia	5424 spring st	queanbeyan	northern territory	23036	kelsey	06-6106-7567	1
1294135972	patrick.harper@example.com	harper	patrick	6949 paddock way	shepparton	victoria	96022	1313	06-8244-1006	1
1228274963	dana.howell@example.com	howell	dana	4472 shady ln dr	launceston	northern territory	47435	javier	09-0350-8451	1
1196328072	stephanie.parker@example.com	parker	stephanie	4311 edwards rd	toowoomba	south australia	71383	nascar24	09-2448-2755	1
1175101439	roy.reed@example.com	reed	roy	4577 robinson rd	mildura	western australia	96845	lake	00-0724-3102	1
1163419952	sylvia.gonzalez@example.com	gonzalez	sylvia	9038 w belt line rd	bendigo	tasmania	18530	strap	05-4137-8945	1
1136925638	elaine.lawson@example.com	lawson	elaine	4311 frances ct	perth	tasmania	53082	rose	00-3044-3810	1
1068622423	pearl.walters@example.com	walters	pearl	3042 nowlin rd	cairns	queensland	18541	magic32	00-6961-0099	1
1027801140	timmothy.holmes@example.com	holmes	timmothy	1320 dogwood ave	dubbo	western australia	62891	smile	06-4021-0360	1
987415435	shelly.neal@example.com	neal	shelly	3764 e center st	australian capital territory	victoria	66287	happy2	08-7180-4284	1
964515840	florence.arnold@example.com	arnold	florence	3223 taylor st	townsville	new south wales	71864	sylveste	05-7254-9325	1
931041675	ella.fowler@example.com	fowler	ella	9460 sunset st	dubbo	victoria	14497	hawaii50	09-2389-1301	1
930066941	luis.owens@example.com	owens	luis	4840 forest ln	nowra	tasmania	15082	cat123	07-1626-0681	1
```

#### Question 3:
Show all reservations organized by Flight Number.

SQL:
```
SELECT * 
FROM  `Reservations` 
ORDER BY FlightNumber
LIMIT 0 , 30
```

#### Answer:
```
FlightNumber	FlightDate	SeatNumber	MealType	Cost	ReservationID	UUID	ClassType	SeatType	
NKS1069	2005-07-22	12	Kosher	173.2	5663283ec6240	931041675	1	Normal
NKS1169	2005-07-22	20	Kosher	174.3	5663283ec9f48	941857889	3	window
NKS118	2005-07-22	19	Kosher	173.2	5663283ed170f	959247934	2	Isle
NKS146	2005-07-22	15	Kosher	80.03	5663283ed4b04	934964226	2	window
NKS172	2005-07-22	1	Vegetarian	289.8	5663283edb3d6	924474922	1	window
NKS185	2005-07-22	11	Vegetarian	147.35	5663283ede747	929605939	3	window
NKS188	2005-07-22	13	Halal	133.49	5663283ee6418	925200990	2	Isle
NKS209	2005-07-22	20	Halal	94.44	5663283eea324	951089965	2	Isle
NKS223	2005-07-22	15	Vegetarian	173.2	5663283ef10f1	920826381	1	window
NKS245	2005-07-22	17	Kosher	138.77	5663283ef402d	919368215	3	window
NKS303	2005-07-22	6	Vegetarian	142.62	5663283f06bc9	941857889	2	Isle
NKS315	2005-07-22	7	Kosher	213.9	5663283f0d977	949029297	1	window
NKS323	2005-07-22	5	Kosher	138.77	5663283f13ed1	950773015	2	window
NKS342	2005-07-22	0	Vegetarian	334.9	5663283f19b42	964515840	3	window
NKS360	2005-07-22	10	Vegan	145.15	5663283f1f980	934761093	3	window
NKS372	2005-07-22	16	Halal	50	5663283f257dd	934964226	2	Isle
NKS425	2005-07-22	3	Vegetarian	97.3	5663283f2cd96	930066941	1	window
NKS443	2005-07-22	13	Halal	50	5663283f3359d	935711052	3	window
NKS470	2005-07-22	17	Halal	143.72	5663283f38415	929605939	3	window
NKS500	2005-07-22	3	Vegan	97.63	5663283f3d298	954129985	2	Isle
SWA842	2005-07-22	19	Kosher	104.12	5663283f4211a	920324764	3	window
SWA848	2005-07-22	6	Halal	233.7	5663283f46f8b	943148842	2	window
SWA849	2005-07-22	10	Halal	174.3	5663283f4be01	959897705	3	window
SWA853	2005-07-22	14	Kosher	142.18	5663283f4f74a	931300721	3	Normal
SWA868	2005-07-22	12	Kosher	133.6	5663283f564e8	950878134	3	window
SWA870	2005-07-22	10	Kosher	148.67	5663283f5845b	956051018	2	window
SWA874	2005-07-22	10	Halal	208.4	5663283f5b393	922321909	3	Normal
SWA895	2005-07-22	3	Vegetarian	69.91	5663283f5e2cc	916043502	3	window
SWA900	2005-07-22	15	Vegan	50	5663283f63182	926383379	2	window
SWA9008	2005-07-22	17	Kosher	149.66	5663283f67069	953352340	3	Normal
```

#### Question 4:
Show the tail number and status of all aircraft

SQL:
```
SELECT a.`TailNumber` , fs.Status
FROM  `Aircraft` a, Flight_Status fs
WHERE fs.`StatusID` = a.`StatusID` 
AND a.`StatusID` 
IN ( 3, 4 ) 
LIMIT 0 , 30
```

#### Answer:
```
TailNumber	Status	
8791Q	Broken
8878	Broken
131EV	Broken
133EV	Broken
137EV	Working
138EV	Broken
607LR	Broken
907XJ	Working
908XJ	Broken
912XJ	Working
914XJ	Working
915XJ	Broken
919XJ	Broken
920XJ	Working
921XJ	Working
923XJ	Working
925XJ	Working
926XJ	Broken
928XJ	Working
929XJ	Broken
937XJ	Working
13988	Broken
14931	Broken
14977	Broken
14991	Working
16976	Working
16987	Working
595SW	Working
597SW	Broken
720SW	Broken
```

#### Question 5:
Show a history of reservations for passenger x

SQL:
```
SELECT *
FROM `Users` u, Reservations r
WHERE r.uuid = u.uuid and 
u.`FirstName`like 'fowler'
u.`LastName` like 'ella'
```

#### Answer:
```

```

#### Question 6:
Add a new customer(passenger)

SQL:
```
INSERT INTO `rkulkarni`.`Users` (`UUID`, `Email`, `LastName`, `FirstName`, `StreetAddress`, `City`, `State`, `ZipCode`, `Password`, `ContactPhone`, `RoleID`) 
VALUES ('23425', 'nandakishore.tokala@gmail.com', 'tokala', 'Nanda Kishore ', '4700 taft blvd apt# 254', 'wichita falls', 'texas', '76308', 'ntokala', '5124134577', (SELECT  `RoleID` 
FROM  `Roles` 
WHERE Title =  'Passenger'));
```

#### Answer:
```

```

#### Question 7:
Add a new administrator(worker)

SQL:
```
INSERT INTO `rkulkarni`.`Users` (`UUID`, `Email`, `LastName`, `FirstName`, `StreetAddress`, `City`, `State`, `ZipCode`, `Password`, `ContactPhone`, `RoleID`) 
VALUES ('23425', 'nandakishore.tokala@gmail.com', 'tokala', 'Nanda Kishore ', '4700 taft blvd apt# 254', 'wichita falls', 'texas', '76308', 'ntokala', '5124134577', (SELECT  `RoleID` 
FROM  `Roles` 
WHERE Title =  'Administrator'));
```

#### Answer:
```

```

#### Question 8:
Determine if a specific flight is full

SQL:
```
select pc.Flightdate,pc.FlightNumber
from 
(SELECT COUNT( * ) as reserveCount, FlightDate, FlightNumber
FROM Reservations r
WHERE FlightDate =  '2005-07-22'
AND FlightNumber =  'NKS1069')  pc,Flights f,Aircraft a
WHERE  pc.FlightNumber = f.FlightNumber and pc.Flightdate = f.departureTime and a.Capacity= pc.reserveCount
```

#### Answer:
```

```

#### Question 9:
Find all flights that are delayed.

SQL:
```
SELECT  `FlightNumber` ,  `TimeStamp` 
FROM  `Flights` 
WHERE  `StatusID` = ( 
SELECT  `StatusID` 
FROM  `Flight_Status` 
WHERE  `Status` =  'Delayed' )
```

#### Answer:
```
FlightNumber	TimeStamp	
NKS118	2005-07-22 17:12:59
NKS188	2005-07-22 17:12:59
NKS315	2005-07-22 17:12:59
NKS425	2005-07-22 17:12:59
SWA868	2005-07-22 17:12:59
```

#### Question 10:
Cancel a Reservation.

SQL:
```
DELETE FROM Reservations WHERE FlightDate =  '2005-07-22' AND FlightNumber =  'NKS1069' AND  `UUID` = ( SELECT  `UUID` 
FROM  `Users` 
WHERE  `FirstName` =  'clarence'
AND  `LastName` =  'alexander' )
```

#### Answer:
```

```

#### Question 11:
Show a history of flights that each aircraft was assigned to.

SQL:
```
SELECT * 
FROM  `Flights` 
WHERE  `TailNumber` 
IN (SELECT  `TailNumber` 
FROM  `Aircraft`
)ORDER BY TailNumber
```

#### Answer:
```
FlightNumber	TailNumber	StatusID	DepartureTime	ArrivalTime	TimeStamp	destinationid	
SWA907	135EV	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	48
SWA904	136EV	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	178
SWA9010	137EV	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	86
SWA9008	138EV	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	13
SWA900	601LR	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	142
SWA895	602LR	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	33
SWA874	604LR	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	124
SWA870	605LR	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	181
SWA868	606LR	2	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	101
SWA853	607LR	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	178
SWA849	901XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	160
SWA848	902XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	37
SWA842	903XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	91
NKS1069	904XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
NKS1169	905XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	160
NKS118	906XJ	2	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	24
NKS146	907XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	117
NKS172	908XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	18
NKS185	909XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	169
NKS188	910XJ	2	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	139
NKS209	912XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	11
NKS223	913XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
NKS245	914XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	36
NKS303	915XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	78
NKS315	916XJ	2	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	85
NKS323	917XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	36
NKS342	918XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	76
NKS360	919XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	62
NKS372	920XJ	1	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	41
NKS425	921XJ	2	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	59
```

#### Question 12:
Add a new user

SQL:
```
INSERT INTO `rkulkarni`.`Users` (`UUID`, `Email`, `LastName`, `FirstName`, `StreetAddress`, `City`, `State`, `ZipCode`, `Password`, `ContactPhone`, `RoleID`) 
VALUES ('23425', 'nandakishore.tokala@gmail.com', 'tokala', 'Nanda Kishore ', '4700 taft blvd apt# 254', 'wichita falls', 'texas', '76308', 'ntokala', '5124134577', (SELECT  `RoleID` 
FROM  `Roles` 
WHERE Title =  'Passenger'));
```

#### Answer:
```

```

#### Question 13:
List all flights in which a passenger requested a vegetarian meal

SQL:
```
SELECT  `FlightNumber` ,  `FlightDate` 
FROM  `Reservations` 
WHERE  `MealType` =  'Vegetarian';
```

#### Answer:
```
FlightNumber	FlightDate	
NKS172	2005-07-22
NKS185	2005-07-22
NKS223	2005-07-22
NKS303	2005-07-22
NKS342	2005-07-22
NKS425	2005-07-22
SWA895	2005-07-22
SWA904	2005-07-22
```

#### Question 14:
Show a list of all current flights,their status,and how full(via a percentage) they are.

SQL:
```

```

#### Answer:
```

```

#### Question 15:
Show all flights leaving x and going to y(where x and y are cities or airports).

SQL:
```
SELECT * 
FROM  `Flights` 
WHERE  `destinationid` = ( 
SELECT  `id` 
FROM  `TravelDistance` 
WHERE  `Destination` =  'MCO'
AND  `Origin` =  'BOS' ) 
```

#### Answer:
```
FlightNumber	TailNumber	StatusID	DepartureTime	ArrivalTime	TimeStamp	destinationid	
NKS1069	904XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
NKS223	913XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
```

#### Question 16:
Show all flights leaving x and going to y on date z

SQL:
```
SELECT * 
FROM  `Flights` 
WHERE  `destinationid` = ( 
SELECT  `id` 
FROM  `TravelDistance` 
WHERE  `Destination` =  'MCO'
AND  `Origin` =  'BOS' ) 
AND TIMESTAMP =  '2005-07-22 17:12:59'
```

#### Answer:
```
FlightNumber	TailNumber	StatusID	DepartureTime	ArrivalTime	TimeStamp	destinationid	
NKS1069	904XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
NKS223	913XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
```

#### Question 17:
Show all flights leaving x and going to y on date z where departure time is in between T1 and T2

SQL:
```
SELECT * 
FROM  `Flights` 
WHERE  `destinationid` = ( 
SELECT  `id` 
FROM  `TravelDistance` 
WHERE  `Destination` =  'MCO'
AND  `Origin` =  'BOS' ) 
AND TIMESTAMP =  '2005-07-22 17:12:59'
AND departureTime
BETWEEN  '2005-07-22 5:12:59'
AND  '2005-07-22 18:12:59'
```

#### Answer:
```
FlightNumber	TailNumber	StatusID	DepartureTime	ArrivalTime	TimeStamp	destinationid	
NKS1069	904XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
NKS223	913XJ	0	2005-07-22 17:12:59	2005-07-22 20:12:59	2005-07-22 17:12:59	23
```

#### Question 18:
List all planes according to capacity

SQL:
```
SELECT * 
FROM  `Aircraft` 
ORDER BY  `Capacity` DESC 
```

#### Answer:
```
TailNumber	Airline	Manufacture	Model	Capacity	StatusID	
13975	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	1
17984	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	2
16987	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	4
16981	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	2
16976	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	4
15986	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	2
15983	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	0
15980	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	1
14993	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	2
14991	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	4
14977	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	3
14931	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145	55	3
13992	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	1
13990	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	0
13989	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	1
13979	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	0
13988	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	3
13978	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	1
18982	CONTINENTAL AIRLINES INC	EMBRAER	EMB-145LR	55	0
594SW	DELTA AIR LINES INC	BOMBARDIER INC	CL-600-2B19	55	2
954CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	0
956CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	0
957CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	3
958CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	4
959CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	2
964CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	4
966CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	1
989CA	DELTA AIR LINES INC	CANADAIR	CL-600-2B19	55	4
937EV	DELTA AIR LINES INC	BOMBARDIER INC	CL-600-2B19	55	4
935EV	DELTA AIR LINES INC	BOMBARDIER INC	CL-600-2B19	55	4
```

#### Question 19:
Show remaining number of Isle/Window seats available on a specific flight.

SQL:
```
SELECT (
(SELECT windowSeatCount
FROM  `Aircraft` a, AircraftCapapcity ac
WHERE a.Capacity = ac.TotalCapacity
AND  `TailNumber` = ( 
SELECT TailNumber
FROM Flights
WHERE FlightNumber =  'NKS1069'
AND DepartureTime =  '2005-07-22 17:12:59' )
) - ( 
SELECT COUNT( * ) 
FROM Reservations
WHERE SeatType =  'window'
AND FlightNumber =  'NKS1069'
AND FlightDate =  '2005-07-22' )
)remaingwindowSeat
FROM dual
```

#### Answer:
```
remaingwindowSeat	
10
```

#### Question 20:
Select the number of available first class/business/coach seats available for agiven flight.

SQL:
```
SELECT (
(
SELECT FirstClass
FROM  `Aircraft` a, AircraftCapapcity ac
WHERE a.Capacity = ac.TotalCapacity
AND  `TailNumber` = ( 
SELECT TailNumber
FROM Flights
WHERE FlightNumber =  'NKS1069'
AND DepartureTime =  '2005-07-22 17:12:59' )
) - ( 
SELECT COUNT( * ) 
FROM Reservations
WHERE ClassType = ( 
SELECT  `ClassID` 
FROM  `Class` 
WHERE  `ClassName` =  'First Class' ) 
AND FlightNumber =  'NKS1069'
AND FlightDate =  '2005-07-22' )
)remaingFirstClass
FROM dual
```

#### Answer:
```
remaingFirstClass	
9
```

#### Question 21:
Alter a reservation

SQL:
```
UPDATE  `Reservations` SET  `MealType` =  'Koshar' WHERE  `UUID` =  '5663283ec6240'
```

#### Answer:
```

```

#### Question 22:
Determine the fare of a flight(Fare = $50 +(Distance * $0.11))

SQL:
```
SELECT FlightNumber, TIMESTAMP, (
(
t.distance * 0.11
) +50
) AS fare
FROM Flights f, TravelDistance t
WHERE f.`destinationid` = t.id
LIMIT 0 , 30
```

#### Answer:
```
FlightNumber	Timestamp	fare	
NKS1069	2005-07-22 17:12:59	173.2
NKS1169	2005-07-22 17:12:59	174.3
NKS118	2005-07-22 17:12:59	173.2
NKS146	2005-07-22 17:12:59	80.03
NKS172	2005-07-22 17:12:59	289.8
NKS185	2005-07-22 17:12:59	147.35
NKS188	2005-07-22 17:12:59	133.49
NKS209	2005-07-22 17:12:59	94.44
NKS223	2005-07-22 17:12:59	173.2
NKS245	2005-07-22 17:12:59	138.76999999999998
NKS303	2005-07-22 17:12:59	142.62
NKS315	2005-07-22 17:12:59	213.9
NKS323	2005-07-22 17:12:59	138.76999999999998
NKS342	2005-07-22 17:12:59	334.9
NKS360	2005-07-22 17:12:59	145.15
NKS372	2005-07-22 17:12:59	50
NKS425	2005-07-22 17:12:59	97.3
NKS443	2005-07-22 17:12:59	50
NKS470	2005-07-22 17:12:59	143.72
NKS500	2005-07-22 17:12:59	97.63
SWA842	2005-07-22 17:12:59	104.12
SWA848	2005-07-22 17:12:59	233.7
SWA849	2005-07-22 17:12:59	174.3
SWA853	2005-07-22 17:12:59	142.18
SWA868	2005-07-22 17:12:59	133.6
SWA870	2005-07-22 17:12:59	148.67000000000002
SWA874	2005-07-22 17:12:59	208.4
SWA895	2005-07-22 17:12:59	69.91
SWA900	2005-07-22 17:12:59	50
SWA9008	2005-07-22 17:12:59	149.66
SWA9010	2005-07-22 17:12:59	242.5
SWA904	2005-07-22 17:12:59	142.18
SWA907	2005-07-22 17:12:59	245.8
```

