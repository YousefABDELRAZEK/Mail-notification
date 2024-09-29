<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>Contact-Form</title>
</head>
<style>
body,.container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    height:100vh;
    margin: 0;
    align-items: center;
}
body{
    background-color: #013747;
     font-family: "Fredoka", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}
.orange {
  color: #ff7a01;
}

.form-container {
    display: flex;
    flex-direction: column;
    justify-content: center;

    align-items: center;
  max-width: 700px;
  margin: 30px auto;
  background-color: #001925;
  padding: 30px;
  border-left: 5px solid #ff7a01;
  clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%);
}

.heading {
  display: block;
  color: white;
  font-size: 1.5rem;
  font-weight: 800;
  margin-bottom: 20px;
}

.form-container .form .input {
  color: #87a4b6;
  width: 100%;
  background-color: #002733;
  border: none;
  outline: none;
  padding: 10px;
  margin-bottom: 20px;
  font-weight: bold;
  transition: all 0.2s ease-in-out;
  border-left: 1px solid transparent;
  font-family: "Fredoka", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

.form-container .form .input:focus {
  border-left: 5px solid #ff7a01;
}

.form-container .form .textarea {
  width: 100%;
  padding: 10px;
  border: none;
  outline: none;
  background-color: #013747;
  color: #ff7a01;
  font-weight: bold;
  resize: none;
  max-height: 150px;
  margin-bottom: 20px;
  border-left: 1px solid transparent;
  transition: all 0.2s ease-in-out;
  font-family: "Fredoka", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

.form-container .form .textarea:focus {
  border-left: 5px solid #ff7a01;
}

.form-container .form .button-container {
  display: flex;
  gap: 10px;
}

.form-container .form .button-container .send-button {
  flex-basis: 70%;
  background: #ff7a01;
  padding: 10px;
  color: #001925;
  text-align: center;
  font-weight: bold;
  border: 1px solid transparent;
  transition: all 0.2s ease-in-out;
  font-family: "Fredoka", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
}

.form-container .form .button-container .send-button:hover {
  background: transparent;
  border: 1px solid #ff7a01;
  color: #ff7a01;
}
.send-button{
    margin-right: -40px;
}

.form-container .form .button-container .reset-button-container {
  filter: drop-shadow(1px 1px 0px #ff7a01);
  flex-basis: 30%;

}

.form-container .form  .reset-button-container .reset-button {
  position: relative;
  font-family: "Fredoka", sans-serif;
  font-optical-sizing: auto;
  font-weight: 500;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
    border: 1px solid #ff7a01;
  text-align: center;
  padding: 10px;
  color: #ff7a01;
  font-weight: bold;
  background: #001925;
  clip-path: polygon(0 0, 100% 0, 100% calc(100% - 10px), calc(100% - 10px) 100%, 0 100%);
  transition: all 0.2s ease-in-out;
}

.form-container .form .button-container .reset-button-container .reset-button:hover {
  background: #ff7a01;
  color: #001925;
}
.button-container{
    justify-content: center;
    display: flex;
    align-items: center;
    text-align: center;
}
    </style>
<body>
<form action="{{route('create')}}" method="POST">
    @csrf


<div class="container">


<div class="form-container">
    <div class="form">
        <span class="heading">Get in touch</span>
        <input placeholder="Name" type="text" name="name" class="input">
        <input placeholder="Email" id="mail" name="email" type="email" class="input">
        <textarea placeholder="Say Hello" name="message" rows="10" cols="30" id="message" name="message" class="textarea"></textarea>
        <div class="button-container">
        <button class="send-button" type="submit">Send</button>
        <div class="reset-button-container">
    <button id="reset-btn" class="reset-button" type="reset">Reset</button>
        </div>
    </div>
</div>
</div>
</div>
</form>
</body>
</html>
