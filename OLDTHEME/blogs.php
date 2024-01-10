<div class="projects container">
    <div class="projects-header">
        <h1 class="section-title">Recent <span>Blogs</span></h1>
    </div>
    <div class="all-projects">
        <div class="project-item">
            <div class="project-info">
                <h1>Blog 1</h1>
                <h2>Entrance</h2>
                <p>Step into the vibrant world of knowledge and innovation as we unveil the breathtaking entrance of James Cook University! 🌟 Nestled amidst lush greenery, this iconic gateway beckons you into a realm where academic excellence meets tropical paradise. The architecture seamlessly blends modern design with the natural beauty of the surrounding landscape, creating an inviting and inspiring atmosphere for all who enter. 🏛️ As you walk through these doors, you embark on a journey of discovery, where endless possibilities await. Join us in celebrating the spirit of learning, exploration, and community at James Cook University - where every entrance is a doorway to a brighter future. 🌐📚</p>
            </div>
            <div>
              <?php
              $videoFilePath = 'Entrance.mp4';
              ?>

              <video id="blogVideo" width="640" height="360" controls autoplay loop>
                  <source src="<?php echo $videoFilePath; ?>" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Blog 2</h1>
            <h2>Study hub</h2>
            <p>Welcome to the heart of academic brilliance – step inside the dynamic Study Hub at James Cook University! 📚✨ Nestled in an environment that fosters concentration and collaboration, our state-of-the-art hub is designed to ignite your intellectual curiosity. From cozy study nooks to cutting-edge technology, this space is a haven for learners seeking inspiration. Join us in this immersive experience, where knowledge knows no bounds and connections are forged. 🌐💡 Elevate your educational journey at James Cook University's Study Hub – where innovation meets dedication, and every study session is a step closer to success. 🚀🔍</p>
          </div>
          <div>
              <?php
              $videoFilePath = 'StudyHub.mp4';
              ?>

              <video id="blogVideo" width="640" height="360" controls autoplay loop>
                  <source src="<?php echo $videoFilePath; ?>" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Blog 3</h1>
            <h2>Libary</h2>
            <p>Dive into the captivating world of knowledge at the James Cook University Library! 📚✨ Immerse yourself in a sanctuary of learning, where the pages of countless stories and discoveries await. Our library isn't just a repository of books; it's a gateway to endless possibilities. From the hushed whispers of eager learners to the soft glow of study spaces, this is where academic journeys begin to unfold. Join us as we explore the intellectual heartbeat of our campus – a haven for exploration, research, and inspiration. 🌐🔍 Ignite your curiosity at James Cook University Library, where every shelf holds a key to unlocking new realms of understanding. 🚀📖</p>
          </div>
          <div class="project-img">
            <img src="./img/Libary.jpeg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Blog 4</h1>
            <h2>Multipurpose Hall</h2>
            <p>Step into the beating heart of collaboration and celebration at James Cook University's Multipurpose Hall! 🎉✨ This dynamic space is more than just four walls; it's a canvas for innovation, a stage for talent, and a hub for diverse activities that bring our community together. From lectures that inspire to events that captivate, this hall echoes with the vibrancy of student life. Join us in this visual journey through a versatile arena where ideas flourish, friendships blossom, and memories are made. 🌐🎓 Embrace the spirit of camaraderie and achievement at the Multipurpose Hall – where every gathering is a testament to the richness of our academic tapestry. 🚀🌈 </p>
          </div>
          <div class="project-img">
            <img src="./img/MPH.jpeg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Blog 5</h1>
            <h2>One Stop Center</h2>
            <p>Discover the epitome of convenience and support at James Cook University's One Stop Center! 🌐🔗 Your educational journey simplified in one space – from enrollment to academic advice, all your needs met seamlessly under one roof. Join us in this glimpse into the beating heart of student services, where our dedicated team stands ready to guide you through every step. 🤝🎓 Navigate your academic adventure with ease and confidence, knowing that the One Stop Center is your go-to hub for assistance and resources. 🚀✨ Experience the power of streamlined support at James Cook University – where success begins with a single, efficient stop. </p>
          </div>
          <div class="project-img">
            <img src="./img/onestopcenter.jpeg" alt="img">
          </div>
        </div>
      </div>
</div>

<script>
  function restartVideo(videoId) {
    var video = document.getElementById(videoId);
    video.currentTime = 0;
    video.play();
  }
</script>