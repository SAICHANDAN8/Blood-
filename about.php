<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>about us</title>
</head>
<body background="about.jpg">
	<header class="header">
		<h1>ABOUT BLOOD DONATION</h1>
	</header>
	<div class="about">
	<h1>Blood Donation: Save Lives, Give Blood</h1>
	<p>Blood donation is a vital part of healthcare that saves countless lives every day. Donated blood is used for various medical treatments, surgeries, and emergencies, and is always in high demand.</p>
	<h2>Who can donate blood?</h2>
	<p>Most healthy adults over the age of 18 can donate blood, as long as they meet certain criteria. This includes having a minimum weight of 110 pounds, being in good health, and not having any infectious diseases or conditions that may affect blood safety.</p>
	<h2>Why donate blood?</h2>
	<p>Donating blood is a simple yet powerful way to help others in need. Just one donation can save up to three lives, and regular donations can make a significant difference in the lives of many. Blood donation is also safe, painless, and doesn't take much time.</p>
	<h2>How to donate blood?</h2>
	<p>If you're interested in donating blood, you can find a blood donation center or blood drive near you. You'll be asked to fill out a medical history form and undergo a quick physical exam to ensure your eligibility. The donation process itself usually takes less than an hour, and involves drawing blood from a vein in your arm. After the donation, you'll be given snacks and drinks to help you recover.</p>
	<h2>Blood donation tips</h2>
	<p>To make your blood donation experience as smooth as possible, here are a few tips to keep in mind:</p>
	<ul>
	<li>Drink plenty of water before and after your donation.</li>
	<li>Eat a healthy meal before your donation to help maintain your blood sugar levels.</li>
	<li>Wear comfortable and loose-fitting clothes.</li>
	<li>Bring a valid ID with you to the donation center or blood drive.</li>
	</ul>
	<p>By donating blood, you're making a valuable contribution to your community and helping to save lives. Thank you for considering blood donation!</p>


	</div>
</body>

	<style>
		body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-image: url('https://media.istockphoto.com/id/168586458/photo/blood-drop-falling-into-water.jpg?s=612x612&w=0&k=20&c=o0zl-5Qhl3OyydGj20RWPbFrTqeIVaqTb7SKDByyhe0=');
    background-size: cover;
    background-position: center;
    color: #6c0808;
    font-family: Arial, sans-serif;
}

h1{
    color: #df4e4e;
}
.header {
    text-align: center;
}

.about {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 60%;
    height: fit-content;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    animation-name: slide-in;
    animation-duration: 1s;
}

@keyframes slide-in {
    0% {
        transform: translateY(-50px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

h1, h2, p {
    margin: 10px 0;
}

ul {
    list-style-type: none;
    margin: 10px 0;
    padding: 0;
}

li:before {
    content: '\2022';
    margin-right: 10px;
    font-size: 1.5rem;
    color: #c00;
}

.blood-drop {
    position: absolute;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: rgba(255, 0, 0, 0.7);
    animation: drop 2s ease-in-out infinite;
}

.blood-drop:nth-child(1) {
    top: 30%;
    left: 10%;
    animation-delay: -1s;
}

.blood-drop:nth-child(2) {
    top: 50%;
    left: 80%;
    animation-delay: -2s;
}

.blood-drop:nth-child(3) {
    top: 70%;
    left: 30%;
    animation-delay: -3s;
}

.blood-drop:nth-child(4) {
    top: 90%;
    left: 60%;
    animation-delay: -4s;
}

@keyframes drop {
    0% {
        transform: translateY(-200px) scale(0.2);
        opacity: 0.8;
    }
    50% {
        transform: translateY(200px) scale(1);
        opacity: 0.3;
    }
    100% {
        transform: translateY(500px) scale(0.2);
        opacity: 0;
    }
}


	</style>
</html>