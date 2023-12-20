<style>
  .gallery {
    --s: 50px; /* control the slanted part */
  
    display: grid;
    height: 350px;
    gap: 8px;
    grid-auto-flow: column;
    place-items: center;
  }

  .gallery > div {
    position: relative;
    width: 0;
    min-width: calc(100% + var(--s));
    height: 0;
    min-height: 100%;
    overflow: hidden;
    cursor: pointer;
    transition: .5s;
  }

  .gallery > div:hover {
    width: 15vw; 
  }

  .gallery > div > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    clip-path: polygon(var(--s) 0, 100% 0, calc(100% - var(--s)) 100%, 0 100%);
  }

  .gallery > div::after {
    content: attr(data-caption);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    padding: 8px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .gallery > div:hover::after {
    opacity: 1;
  }

  .gallery > div:first-child {
    min-width: calc(100% + var(--s)/2);
    place-self: start;
    clip-path: polygon(0 0, 100% 0, calc(100% - var(--s)) 100%, 0 100%);
  }

  .gallery > div:last-child {
    min-width: calc(100% + var(--s)/2);
    place-self: end;
    clip-path: polygon(var(--s) 0, 100% 0, 100% 100%, 0 100%);
  }

  body {
    font-family: roboto;
  }

  @media (max-width: 768px) {
    .gallery {
      grid-auto-flow: row;
      gap: 16px;
      height: auto; /* Set height to auto for full height in mobile view */
    }

    .gallery > div {
      min-width: 100%;
      height: auto; /* Set height to auto for full height in mobile view */
      width: 100%;
    }

    .gallery > div:first-child,
    .gallery > div:last-child {
      min-width: 100%;
    }
    
    .gallery > div > img {
      width: 100%;
      height: auto; /* Set height to auto for full height in mobile view */
      object-fit: cover;
      clip-path: none;
    }
  }
</style>

<h3 class="text-center" style="text-transform:uppercase">Team Members</h3><br>
<div class="gallery">
  <div data-caption="Rohini Prakash Pawar"><img src="img/female.jpg" alt="Rohini Prakash Pawar"></div>
  <div data-caption="Rajendra Kenjale"><img src="img/male.jpg" alt="Rajendra Kenjale"></div>
  <div data-caption="Shree Ombase"><img src="img/male.jpg" alt="Shree Ombase"></div>
  <div data-caption="Rajkumar Raut"><img src="img/male.jpg" alt="Rajkumar Raut"></div>
  <div data-caption="Anil Nivruti Jadhav"><img src="img/male.jpg" alt="Anil Nivruti Jadhav"></div>
  <div data-caption="Suraj Pawar"><img src="img/male.jpg" alt="Suraj Pawar"></div>
  <div data-caption="Swapnil Chhajed"><img src="img/male.jpg" alt="Swapnil Chhajed"></div>
  <div data-caption="Meena Rathod"><img src="img/male.jpg" alt="Meena Rathod"></div>
</div>
