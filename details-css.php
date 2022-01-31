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
  margin-top: 30px;
  margin-bottom: 30px;
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
  .button{

   height: 40px;
   margin: 35px 0;
   width: 200px;
  
 }

  .button a{
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
   margin-left: 260px;
   margin-top: 20px;
   text-decoration: none;

 }
 .button a:hover{
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


/*Upload image*/

@import url(https://fonts.googleapis.com/css?family=Lato:400,700,300);




.select-container{
    width: 100%;
    height: 100%;
    margin-top: 30px;

  }

.file-upload-wrapper{
  position:relative;
  max-width: 400px;
  width: calc(100% / 2 - 50px);
  height:20px;
  cursor: pointer;
  margin-left: 100px;
  margin-left: 340px;
  top: -27px;
  
}
.file-upload-wrapper::after{
  content:attr(data-text);
  font-size: 16px;
  position:absolute;
  top:0;
  left:0;
  background:#fff;
  padding:10px 15px;
  display: block;
  width:calc(100% - 40px);
  pointer-events:none;
  z-index: 20;
  height:15px;
  line-height: 15px;
  color:#999;
  border-radius: 5px 10px 10px 5px;
  font-weight: 300;
}
.file-upload-wrapper::before{
  content:"Upload";
  position:absolute;
  top:0;
  right:0;
  display: inline-block;
  height:30px;
  background: -webkit-linear-gradient(to right, #24C6DC, #514A9D);
  background: linear-gradient(to right, #24C6DC, #514A9D);
  color:#fff;
  font-weight: 400;
  z-index: 25;
  font-size: 16px;
  line-height: 30px;
  padding:0 15px;
  text-transform: uppercase;
  pointer-events: none;
  border-radius: 0 5px 5px 0;
  transition: 0.5s ease-in-out;
}
.file-upload-wrapper:hover::before{
  background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);
  background: linear-gradient(to right, #514A9D, #24C6DC);
}
.file-upload-wrapper input{
  opacity: 0;
  position:absolute;
  top:0;
  right:0;
  bottom:0;
  left:0;
  z-index: 99;
  height:40px;
  margin:0;
  padding:0;
  display:block;
  cursor: pointer;
  width:100%;
}
.contact{

 
  margin-top: 130px;
  
  font-size: 18px;
  

}
.contact p{

   
   text-align: center;
}
 .ttle{

  
  
  font-size: 16px;
  text-align: center;


}
.text-content{
  
  position: relative;
  top: 80px;
  left: 10px;
  width: 600px;
  margin: 10px;
  font-size: 18px;
  border: 1px solid;
}
.text-content p{
  margin-top:0;
  padding: 10px;
}
.line{

   border-bottom: 1px dash black;
}
