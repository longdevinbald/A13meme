<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1
{
    padding: 70 px 0;
    color:red;
    text-shadow: 2px 2px 5px ;
    animation: move2 2s  forwards ;
    opacity: 0;
    position: relative;
    text-align: center;
    vertical-align: center;
    position:absolute;
    top:50%;
    left:50%;
    margin-top: -25px;
    margin-left: 200px;
    font-size:100px;
    font-family: "Times New Roman", Times, serif;
}

h2
{
    padding: 70 px 0;
    color:red;
    text-shadow: 2px 2px 5px ;
    animation: move3 2s  forwards ;
    opacity: 0;
    position: relative;
    text-align: center;
    vertical-align: center;
    position:absolute;
    top: 60%;
    right:50%;
    margin-top: -25px;
    margin-left: 250px;
    font-size:100px;
    font-family: "Times New Roman", Times, serif;
}
@keyframes move3
{
    from
    {
        opacity: 0;
        margin-right: -500px;
    }
    to{
        opacity: 1;
        margin-right: -250px;
    }
}
@keyframes move2 {
    from
    {
        opacity: 0;
        margin-left: -500px;
    }
    to{
        opacity: 1;
        margin-left: -200px;
    }
}
html
{
    background:url('https://z-p3-scontent.xx.fbcdn.net/v/t1.15752-9/305429981_781650303152317_810888079923785292_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=aee45a&_nc_ohc=LSAFZYkh5m8AX93nwcV&_nc_ht=z-p3-scontent.xx&oh=03_AVLjP4v_APo8o4mEhVYQI7X0T4auQYoZrZ4OCqFkw4LNrA&oe=633F2F9F');
    background-size: cover;
}
a.button
{
    display:inline-block;
    padding: 20px 50px;
    background-color: red; 
    text-decoration: none;
    border-radius: 60px;
    font-size: 30px;
    opacity: 1;
    animation: move4 2s forwardsA;
}
@keyframes move4 {
    from{
    opacity: 0;
    }
    to{
    opacity: 1;
    }
}
a.button.messenger
{
    ackground: #0099FF;
    color: b#fff;
}
#wrapper{
align-items: center;
display: flex;
justify-content: center;
min-height: 150vh;
top:70%;
left:50%;


}
</style>
   
</head>
<body>
<h2>
        meme land 
    </h2>
    <h1>
     A13
    </h1>
    <div id="wrapper">
        <a href="mainstage.php" class="button messenger">
            <span width="100px" class="button-text">
                start
            </span>
        </a>
    </div>
    

  <div></div>
</body> 
</html>