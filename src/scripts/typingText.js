var typingText = document.getElementById('typingText'),
	myArray = typingText.dataset.text.split(""),
	loopTimer;

function frameLooper() {
  if(myArray.length > 0) {
    document.getElementById("typingText").innerHTML += myArray.shift();
  } else {
    clearTimeout(loopTimer); 
                return false;
  }
  loopTimer = setTimeout('frameLooper()',100);
}