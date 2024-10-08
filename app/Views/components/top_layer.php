<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300..900&display=swap" rel="stylesheet">
    <!-- RemixIcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Go Gusto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
body {
  font-family: 'Montserrat', sans-serif;
  background-color: #ffffff;
}

h1 {
  color: #3C3633;
  font-size: 3rem;
  font-weight: bold;
}

p {
  color: #3C3633;
  font-size: 0.8rem;
}

/* HEADER */
header {
  background-color: #4caf50; /* Green */
  background-size: cover;
  color: #3C3633;
}

/* NAVBAR */
.navbar {
  color: #3C3633;
  position: fixed;
  top: 0;
  width: 100%;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
  z-index: 1000;
  background-color: #ffffff70;
  border-bottom: none;
  border-bottom-right-radius: 80px;
  border-bottom-left-radius: 80px;
  transition: background-color 0.3s ease; 
}

.navbar.scrolled {
  background-color: #ffffff;
  color: #3C3633;
}

.brand-name {
  color: #8B4513; /* Green */
  font-size: 24px;
  font-weight: bold;
}

.brand-name:hover {
  color: #15f070;
}

.custom-nav-link {
  padding: 10px 20px !important;
}

.navbar-nav .nav-link {
  font-weight: 500;
  font-size: 16px;
  color: #3C3633;
}

.navbar-nav .nav-link:hover {
  color: #8B4513; /* Brown */
}

.nav-link.active {
  color: #8B4513 !important; /* Brown */
  border-bottom: 2px solid #8B4513; /* Brown */
}

/* HERO SECTION */
.hero-section {
  background-image: url('images/blue.png'); /* Updated to blue.png */
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 0;
  margin-bottom: 100px;
  height: 100vh;
  position: relative;
  z-index: 1;
  transition: background 0.8s ease-in-out; 
}

.hero-content {
  position: relative;
  z-index: 2;
  width: 80rem;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInUp 1.5s forwards ease-in-out;
}

@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.hero-content h1 {
  color: #15f070; /* Green */
  font-size: 4rem;
  font-weight: bold;
  font-family: "Frank Ruhl Libre", serif;
  animation-delay: 0.5s;
}

.hero-content p {
  color: #FFFFFF;
  font-size: 1.2rem;
  font-style: italic;
  margin-bottom: 20px;
  animation-delay: 1s;
}

/* Plan Your Trip Button */
.custom-btn {
  background-color: #15f070; /* Green */
  color: #ffffff;
  border: none;
  animation-delay: 1.5s;
}

.custom-btn:hover {
  background-color: #15f070; /* Darker green */
  color: #ffffff; 
}

/* Fade-in Animation */
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Wave Divider */
.custom-shape-divider-bottom-1727274516 {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  overflow: hidden;
  line-height: 0;
  transform: rotate(180deg);
}

.custom-shape-divider-bottom-1727274516 svg {
  position: relative;
  display: block;
  width: calc(100% + 1.3px);
  height: 70px;
}

.custom-shape-divider-bottom-1727274516 .shape-fill {
  fill: #FFFFFF;
}

/* Why Choose Us Section */
.why-choose-us-section {
  margin-top: 50px;
  padding: 0px 20px;
  background-color: #ffffff; 
  color: #333;
}

.section-title {
  font-size: 2.5rem;
  font-weight: bold;
  font-family: "Frank Ruhl Libre", serif;
  color: #15f070; /* Green */
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 20px;
}

.section-subtitle {
  font-size: 1.2rem;
  font-style: italic;
  color: #3C3633;
  margin-bottom: 40px;
}

.why-choose-us-block {
  padding: 20px;
  transition: transform 0.3s ease;
  margin-bottom: 20px;
}

.why-choose-us-block:hover {
  transform: translateY(-10px);
}

.feature-icon {
  font-size: 20px;
  color: #ffffff;
  background-color: #6482AD; 
  border-radius: 50%; 
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 15px; 
}

.why-choose-us-block h4 {
  font-size: 1rem;
  font-weight: bold;
  color: #6482AD; 
  margin-bottom: 10px;
}

.why-choose-us-block p {
  font-size: 1rem;
  color: #3C3633;
}

@media (max-width: 768px) {
  .why-choose-us-block {
    margin-bottom: 30px;
  }
}

/* IMAGE GALLERY SECTION */
.destination-section {
  padding: 80px 20px;
  background-color: #f5f5f5;
  text-align: center;
}

.custom-grid {
  margin-top: 80px;
  display: grid;
  grid-template-columns: repeat(3, 1fr); 
  grid-template-rows: repeat(2, 300px); 
  gap: 15px; 
}

.grid-item {
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.grid-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
  transition: transform 0.3s ease;
}

.grid-item:hover img {
  transform: scale(1.1);
}

/* Overlay Text */
.overlay-text {
  position: absolute;
  bottom: 20px;
  left: 20px;
  color: white;
  text-align: left;
}

.overlay-text h3 {
  font-size: 1.5rem;
  margin: 0;
}

.overlay-text p {
  font-size: 1rem;
  margin: 5px 0 0 0;
  opacity: 0.9;
}

/* Big and Small grid items */
.big {
  grid-column: span 2; 
}

.small {
  grid-column: span 1; 
}

/* Responsive: For tablets and smaller devices */
@media (max-width: 992px) {
  .custom-grid {
    grid-template-columns: repeat(2, 1fr); 
    grid-template-rows: auto;
  }

  .big {
    grid-column: span 2;
    grid-row: auto;
  }

  .small {
    grid-column: span 1;
    grid-row: auto;
  }
}

/* Mobile: Single column layout */
@media (max-width: 576px) {
  .custom-grid {
    grid-template-columns: 1fr; 
  }

  .big, .small {
    grid-column: span 1;
    grid-row: auto;
  }
}

/* AD BANNER SECTION */
.ad-banner-section {
  padding: 20px 20px;
  background-color: #FFFFFF; 
  text-align: center;
  margin-top: 40px; 
  margin-bottom: 40px;
}

.ad-banner {
  width: 100%; 
  height: auto; 
  max-width: 100%;
  display: block;
  border-radius: 10px;
}

/* ITINERARY SECTION */
.tour-timeline {
  padding: 80px 0;
  background-color: #f5f5f5;
  position: relative;
}

.timeline {
  position: relative;
  max-width: 1200px;
  margin: auto;
}

.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: #15f070; /* Green */
  top: 0;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

.timeline-item {
  display: flex;
  justify-content: space-between;
  padding: 50px 0;
  position: relative;
}

.timeline-item .timeline-content {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  width: 45%;
  position: relative;
  z-index: 1;
}

.timeline-item .timeline-img {
  width: 45%;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
}

.timeline-item .timeline-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.timeline-item .timeline-content h3 {
  font-size: 1.8rem;
  font-weight: bold;
  color: #6482AD;
  margin-bottom: 10px;
}

.timeline-item .timeline-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.8;
}

.timeline-item:nth-child(odd) .timeline-content {
  text-align: right;
  order: 1;
}

.timeline-item:nth-child(odd) .timeline-img {
  order: 2;
}

.timeline-item:nth-child(even) .timeline-content {
  text-align: left;
  order: 2;
}

.timeline-item:nth-child(even) .timeline-img {
  order: 1;
}

/* Adjust for smaller screens */
@media screen and (max-width: 768px) {
  .timeline-item {
    flex-direction: column;
  }

  .timeline-item .timeline-img,
  .timeline-item .timeline-content {
    width: 100%;
  }

  .timeline::after {
    left: 5%;
    width: 2px;
  }
}

/* Animation */
[data-aos] {
  opacity: 0;
  transition: opacity 0.6s ease-out;
}

[data-aos].aos-animate {
  opacity: 1;
}

/* Travel Partners Section */
.partners-section {
  background-color: #ffffff; 
  text-align: center;
  margin-top: 30px;
  padding-top: 20px;
  padding-bottom: 20px;
}

.partners-title h3 {
  font-size: 2rem;
  font-weight: bold;
  font-family: "Frank Ruhl Libre", serif;
  color: black;
  margin-bottom: 40px;
  margin-top: 30px;
}

/* Grid Layout for Partner Logos */
.partner-logos {
  display: flex;
  justify-content: center;
  gap: 40px;
  flex-wrap: wrap;
}

.partner-logo img {
  width: 180px;
  height: auto;
  filter: grayscale(100%); 
  opacity: 0.8;
  transition: all 0.3s ease;
}

.partner-logo img:hover {
  filter: grayscale(0%); 
  opacity: 1;
  transform: scale(1.03); 
}

.partners-title h3 {
  font-weight: bold;
}

/* FOOTER */
footer {
  background-color: #f5f5f5;
  color: #3C3633;
  margin-top: 10px;
  margin-bottom: 0 !important;
  padding: 15px;
  display: flex;
  justify-content:space-evenly;
  flex-direction: column;
}

.p-footer {
  color: #3C3633;
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  margin: 10px;
}

.social-links {
  margin: 10px;
  text-align: center;
}

.social-links a {
  margin: 0 15px;
  color: #3C3633;
  font-size: 24px;
  transition: color 0.3s ease, transform 0.3s ease;
}

.social-links a:hover {
  color: #15f070;
  transform: scale(1.2);
}

.social-icon {
  font-size: 24px; 
  margin: 0 10px; 
  color: #3C3633; 
  transition: color 0.3s ease;
}

.social-icon:hover {
  color: #15f070; 
}

.social-icon i {
  text-decoration: none;
  display: inline-block;
}

a {
  text-decoration: none;
}

@media (max-width: 768px) {
  .timeline::after {
    display: none;
  }

  .timeline-item {
    flex-direction: column;
  }

  .timeline-item .timeline-img,
  .timeline-item .timeline-content {
    width: 100%; 
    padding: 20px;
  }

  .timeline-item .timeline-content h3 {
    text-align: center; 
  }

  .timeline-item .timeline-content p {
    text-align: center; 
  }
  .timeline-content {
    text-align: center;
  }
  /* Disable animation */
  .timeline-item .timeline-content {
    animation: none !important; 
    transition: none !important; 
  }
  
  .timeline-item .timeline-img {
    animation: none !important; 
    transition: none !important; 
  }

  
  [data-aos] {
    opacity: 1 !important; 
    transform: none !important; 
    transition: none !important; 
  }

  [data-aos].aos-animate {
    animation: none !important; 
  }
}

@media (max-width: 576px) {
  .ad-banner-svg {
    width: 100%; 
  }
  .hero-content h1 {
    font-size: 1.4rem;
  }
  
  .hero-content p {
    font-size: 1rem;
  }
  .section-title {
    font-size: 2rem;
  }
}
</style>
</head>
<body>