class Sidebar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = ` 
    <div class="flex-shrink-0 p-3 bg-white" style="width: 240px;">
   
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          <a href="#" class="link-dark rounded" style="text-decoration:none;font-weight:600">HOME</a>
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li class="border-top my-3"></li>
            <li><a href="../user.php" class="link-dark rounded">Intro</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part1.php" class="link-dark rounded">section 1</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part2.php" class="link-dark rounded">section 2</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part3.php" class="link-dark rounded">section 3</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part4.php" class="link-dark rounded">section 4</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part5.php" class="link-dark rounded">section 5</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part6.php" class="link-dark rounded">section 6</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part7.php" class="link-dark rounded">section 7</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part8.php" class="link-dark rounded">section 8</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part9.php" class="link-dark rounded">section 9</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part10.php" class="link-dark rounded">section 10</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part11.php" class="link-dark rounded">section 11</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part12.php" class="link-dark rounded">section 12</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part13.php" class="link-dark rounded">section 13</a></li>
            <li class="border-top my-3"></li>
            <li><a href="part14.php" class="link-dark rounded">section 14</a></li>
          </ul>
        </div>
      </li>
      
  </div>
            
            `;
  }
}

customElements.define("sidebar-component", Sidebar);

class SidebarUser extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = ` 
    <div class="flex-shrink-0 p-3 bg-white" style="width: 240px;">
   
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          <a href="#" class="link-dark rounded" style="text-decoration:none;font-weight:600">HOME</a>
        </button>
        <div class="collapse show" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li class="border-top my-3"></li>
            <li><a href="#" class="link-dark rounded">Intro</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part1.php" class="link-dark rounded">section 1</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part2.php" class="link-dark rounded">section 2</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part3.php" class="link-dark rounded">section 3</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part4.php" class="link-dark rounded">section 4</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part5.php" class="link-dark rounded">section 5</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part6.php" class="link-dark rounded">section 6</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part7.php" class="link-dark rounded">section 7</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part8.php" class="link-dark rounded">section 8</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part9.php" class="link-dark rounded">section 9</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part10.php" class="link-dark rounded">section 10</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part11.php" class="link-dark rounded">section 11</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part12.php" class="link-dark rounded">section 12</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part13.php" class="link-dark rounded">section 13</a></li>
            <li class="border-top my-3"></li>
            <li><a href="intro/part14.php" class="link-dark rounded">section 14</a></li>
          </ul>
        </div>
      </li>
      
  </div>
            
            `;
  }
}

customElements.define("sidebar-user-component", SidebarUser);


