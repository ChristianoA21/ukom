function setReminder() {
	var waktu = document.getElementById("waktu");
	var currentTime = new Date();
	var currentHour = currentTime.getHours();

	if (currentHour >= 5 && currentHour < 12){
		waktu.textContent = "Selamat Pagi";
	}
	else if (currentHour >= 12 && currentHour < 15){
		waktu.textContent = "Selamat Siang";
	}
	else if (currentHour >= 15 && currentHour < 18){
		waktu.textContent = "Selamat Sore";
	}
	else if (currentHour >= 18 && currentHour < 24){
		waktu.textContent = "Selamat Malam";
	}
	else if (currentHour >= 24 && currentHour < 5){
		waktu.textContent = "Jangan Lupa Tidur";
	}

}
setReminder();