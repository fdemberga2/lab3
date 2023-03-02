<!doctype html>
<html>
<head>
<style>
div#navbar{
    position: fixed;
    top: 0;
    height: 16%;
    width: 100%;
    z-index: 3;
    left: 0;
    bottom: 5;
}
div#pageselector{
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 3;
    background-color: rgb(131, 94, 0);
}
li#button{
    width: 100px;
    height: 50px;
    background-color: transparent;
    display: inline-block;
    z-index: 3;
}

li a#button{
    display: block;
    color: white;
    width: auto;
    padding: 20px 20px 0px 0px;
    text-decoration: none;
    position: absolute;
    font-size: 18px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

li a#button:hover{
    color: #eeff00;
}
img#picture{
    width: 50px;
    padding: 0px 40px 0px 0px;
    color: transparent;
    border-radius: 1%;
}
ul{
    display: inline-block;
    z-index: 3;
}

hr#header{
    opacity: 0.5;
    color: white;
    size: 4;
}
.button{
position: fixed;
right: 3%;
top: 23%;
width: auto;
background-color: white;
border-radius: 3%;
text-align: center;
}
</style>
</head>
<style></style>
<body>
    <div id="navbar" id="top">
        <div id="pageselector">
        <center>
            <ul>
                <li id="button"><a href="index" id="button">HOME</a></li>
                <li id="button"><a href="Underconstruction" id="button">ABOUT ME</a></li>
                <li id="button"><a href="Underconstruction" id="picture"><img src="src/PIXfb.jpg" alt="Profile" id="picture" padding="none"></a></li>
                <li id="button"><a href="Underconstruction" id="button">MANTRA</a></li>
                <li id="button"><a href="Resources" id="button">Leaving already?</a></li>
            </ul>
        </center>
        <hr id="header">
        </div>
    </div>
</head>
<body>