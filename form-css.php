<?php header("Content-type: text/css"); ?>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}

body{

  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #89c7e7, #F7B41E);
}

.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title p{
  font-size: 18px;
  font-weight: 500;
  position: relative;
  margin-bottom: 10px;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  
}
form .user-details .input-box{
  margin-bottom: 10px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  
}
/*input box*/
.user-details .input-box input{
  height: 30px;
  width: 90%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 10px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 16px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 40px;
   margin: 35px 0;
   width: 150px;
  
 }

 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #102f47);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #F7B41E);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}

form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  form .selection-box{
    width: 100%;
    top: 0;
    margin-left: 0;
  }
  form #hidden_div{
    margin-left: 0;
    margin-top: 20px;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }

  }
  @media(max-width: 300px){

  .container .content .category {
    flex-direction: column;
  }
  
}


/*selection*/

 select {
   -webkit-appearance:none;
   -moz-appearance:none;
   -ms-appearance:none;
   appearance:none;
   outline:0;
   box-shadow:none;
   border:1px solid black;
   border-radius: 5px;
   background: #fff;
   background-image: none;
   flex: 1;
   padding: 0 1em;
   
   color:#000;
   cursor:pointer;
   font-size: 1em;
   font-family: 'Open Sans', sans-serif;

}

select::-ms-expand {
   display: none;
}

.select-container{
 
  flex-direction: column;
  flex-wrap: wrap;
  justify-content: space-between;
  
}


.selection-box {
  
   position: relative;
   display: flex;
   width: calc(100% / 2 - 5px);
   height: 2em;
   line-height: 2;
   background: #fff;
   overflow: hidden;
   border-radius: .35em;
   margin-left: 295px;
   top: -27px;

   
}

.selection-box::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #102f47;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.selection-box:hover::after {
   color: #23b499;
}
.selection-box select span{

  float: left;
  font-weight: bold;
}
#hidden_div{

  height: 100%;
 
  display: none;
  margin-left: 300px;
  
}
#hidden_div input{

  text-decoration: none;
  border: none;
  border-bottom: 1px solid black;
  outline: none;
  background: transparent;
  margin-left: 10px;
  padding-left: 10px;
  font-size: 16px;

}
.total-content{

  position: relative;
  border: 1px solid;
  width: 200px;
  height: 40px;
  margin-left:400px;
  top: -75px;
}
.total-content p{

  line-height: 30px;
  padding: 5px;
  font-weight: bold;
}