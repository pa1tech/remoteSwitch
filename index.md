---
title: Remote Switch

---

<head>
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:title" content="Remote Switch" />
  <meta property="twitter:image" content="https://pa1tech.github.io/remoteSwitch/assets/gg.png" />
  <meta property="twitter:site" content="https://pa1tech.github.io/" /> 
</head>

### Intro
Web controlled switch for home appliances using ESP8266

Most of the smart appliances focus more on controlling them on a local network in their proximity. This project is for remotely controlling AC switch with a relay with minimal electronics, minimal cost (under Rs.200) and compact to integrate

ESP8266 is the perfect choice for this use case. It has a few GPIO's and is WiFi compatible

### Structure
* A website is hosted on Heroku with the required controls - [https://tiitc22-pa1tech.herokuapp.com/](https://tiitc22-pa1tech.herokuapp.com/)
* ESP8266 fetches a different subpage where the controls are put as text with minimal metadata - [https://tiitc22-pa1tech.herokuapp.com/esp](https://tiitc22-pa1tech.herokuapp.com/esp)
* It fetches the controls every 10s and the latest ping time is displayed om the main site, to know if things are going good on the ESP side
* On the ESP8266 side, 230V AC is to be converted to 5V,3.3V for powering relay and the ESP8266. A simple capacitive dropper should be sufficient (Currently used a seperate 5V adapter)
* ESP8266 drives an optocoupler(PC817), which inturn drives an NPN transitor(BC548) to power up the relay coil

### [Source Code](https://github.com/pa1tech/remoteSwitch/)

### Media
<img src="https://pa1tech.github.io/remoteSwitch/assets/cir1.jpg" width="400px"/>
<img src="https://pa1tech.github.io/remoteSwitch/assets/cir2.jpg" width="200px"/>

### [Demo Video](https://pa1tech.github.io/remoteSwitch/assets/demo.mp4)
<video controls>
  <source src="https://pa1tech.github.io/remoteSwitch/assets/demo.mp4" type="video/mp4">
</video>
