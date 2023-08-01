@extends('layouts.main')
@section('container')

<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  background-color: rgb(173,211,98);
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
* {
  box-sizing: border-box;
}
body {
  min-height: 100vh;
}

main {
  width: 70ch;
  margin: 0 auto;
  max-width: 100%;
  padding: 1rem;
  display: grid;
  gap: 2rem;
}

article {
  display: flex;
  align-items: center;
  --bg: hsl(140 20% 80%);
  position: relative;
  --clip: polygon(100% 30%, 0% 0, 0% 100%, 100% 70%);
}

.content {
  padding: 1rem;
}

article:nth-of-type(even) {
  color: hsl(0 0% 98%);
  --bg: hsl(0 0% 10%);
  --clip: polygon(0 30%, 100% 0, 100% 100%, 0 70%);
}

article::after {
  content: "";
  position: absolute;
  inset: -5rem;
  background: var(--bg);
  z-index: -1;
  clip-path: var(--clip);
}

article:nth-of-type(even)::before,
article:nth-of-type(even)::after {
  inset: -8rem;
  --clip: polygon(0 30%, 100% 0, 100% 100%, 15% 70%);
}

article::before {
  content: "";
  inset: -5rem;
  position: absolute;
  background: hsl(150 90% 50%);
  z-index: -1;
  clip-path: var(--clip);
  scale: 1.02;
  transform-origin: 0 0;
}

article:nth-of-type(even)::before {
  transform-origin: 100% 0;
}
</style>
<main>
 
<article>
  <img src="https://picsum.photos/300/300?random=1" alt="">
  <div class="content">
    <h2>Some Card</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque minus animi quod temporibus a, error voluptatibus cupiditate veniam nemo quam quidem tempore sapiente molestiae sequi odio qui? Molestiae, dolores eligendi!</p>
  </div>
</article>
<article>
  <div class="content">
    <h2>Some Card</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit facilis repudiandae sit id maxime deleniti vel iure porro corporis unde. Aliquam temporibus soluta totam, incidunt accusamus praesentium consectetur molestiae autem!</p>
  </div>
  <img src="https://picsum.photos/300/300?random=2" alt="">
</article>
<article>
  <img src="https://picsum.photos/300/300?random=3" alt="">
  <div class="content">
    <h2>Some Card</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae possimus voluptatibus rerum asperiores minima, nemo voluptates. Inventore, necessitatibus dicta. In, tempora aperiam enim omnis expedita sapiente atque cumque ea tenetur.</p>
  </div>
</article>
</main>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

@endsection