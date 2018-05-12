<!DOCTYPE html>
<html>
<head>
    <title>
        bhs
      
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<style>
body {
    margin:0;
}

.navbar {
  overflow: hidden;
  background-color: beige;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: black;
  font-family:monospace;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: lightcoral;
  color: white;
  transition: 0.6s;
  border-radius: 10px;
}

.search{
    padding: 16px;
    margin-top: 20px;
}

input[type=text]{
    width: 100%;
    padding:0;
    height: 40px;
    border-radius: 3px;
    background-color: beige;
    border-color: black;
    color: black;
    float: left;
    overflow: hidden;
    font-family: cursive;
    font-size: 15px;
    margin: 0;
}
.main {
    
    padding: px;
    margin-top: 250px;
    height: 1500px; /* Used in this example to enable scrolling */
  }
}
.search { 
    position: relative; 
    }
.search input { 
    text-indent: 30px;
    }
    .search input:hover{
        transition: 0.5s;
        background: lightseagreen;
        color: white;
        
    }
.search .fa-search { 
  position: absolute;
  top: 153px;
  left: 30px;
  font-size: 15px;}

.fas.fa-heart{
    color: transparent;
    -webkit-text-stroke-color: lightpink;
    -webkit-text-stroke-width: 1.5px;
}



</style>
</head>
<body>

<div class="navbar">
    <h1>B. H. S Signatures</h1>
  <a href="#home">HOME.</a>
  <a href="#news">NEWS.</a>
  <a href="#contact">CONTACT.</a>
  <a href=""><i class="fas fa-shopping-cart"></i></a>
  <br>
        <div class="search">
        <table border="0" width="100%">
         <tr>
            <td>
                    
            <input type="text" placeholder="S E A R C H">  
            <span>
            <i class="fas fa-search"></i>    
            </span>     
            </td>     
        </tr>   
        </table>
        </div>
</div>
<div class="main">
<table border="1"> 

    <tr class="w1">
        <td>
            <img src="http://res.cloudinary.com/benzowe/image/upload/v1525121746/bhslogo.jpg" alt="wedding" height="300" width="200">
        </td>
        <td>
            <h3 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">The Kente Piece </h3>
            <p>This piece offers its bearers, exquisite taste and confidence in all ramifications of strutt</p>

            <button style="background:lightseagreen;padding:10px;border-radius:5px;" class="but">
                <i class="fas fa-plus" style="color:white"></i>
                <a href="" style="text-decoration:none;background:lightseagreen;color:white; font-family:cursive">Add To Cart</a>
                
            </button><br><br>

            <select name="Quantity" id="Quantity" style="background:black;color:white">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
            </select>
            <button>
                <i class="fas fa-heart"></i>
            </button><br><br>
            <textarea name="" id="" cols="30" rows="3" placeholder="Comment on this piece.."></textarea><br>
            <input class="sub" type="submit" value="Submit" name="submit" style="border-color:lightcoral;padding:10px;border-radius:5px;color:lightcoral">
        </td>
    </tr>

</table>
</div>
</body>
</html>