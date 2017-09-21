function switchCheck(){
  var message = document.getElementById('switch');
  console.log(message);
  console.log(document.getElementById('tools').value);
  if(parseInt(document.getElementById('tools').value)){
    message.style.display = "block";
  } else {
    message.style.display = "none";
  }
}
