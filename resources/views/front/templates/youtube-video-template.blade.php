<style>
    /* * { margin: 0; padding: 0; box-sizing: border-box; } */
    .video-container {background: #888; text-align: center; }
    .hero {
        position: relative;
        width: 100%;
        height: 100vh;
        background: #888;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        padding-top: 115px;
    }
    .hero h1 { font-size: 4.5rem; letter-spacing: 2px;}
    .hero h4 { font-size: 30px;  color: rgba(255, 255, 255, 0.6);}
    .hero .text-orange { font-size: 2.8rem; margin: 10px 0; color: #ff6600; }
    .hero p { font-size: 1.4rem; margin: 10px 0; color: #fff; color: rgba(255, 255, 255, 0.6);}
    .hero span { font-weight: bold; }
    .play-button {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 1.5rem;
        margin: 15px 0;
    }
    .buttons { margin-top: 15px; }
    .btn {
        padding: 12px 24px;
        margin: 10px;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        border-radius: 5px;
    }
    .btn-orange { background: #ff6600; color: white; }
    .btn-orange:hover { background: #cc5500; }
    .btn-outline { background: transparent; border: 2px solid white; color: white; }
    .btn-outline:hover { background: white; color: black; }

    /* Video Popup */
    .popup {
        display: none;
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
        z-index: 10000;
    }
    .popup video {
        width: 80%;
        max-width: 800px;
        border-radius: 10px;
    }
    .popup .close {
        position: absolute;
        top: 20px; right: 30px;
        font-size: 2rem;
        color: white;
        cursor: pointer;
    }
</style>
<div class="video-container" >
    @php
        $videoUrl = "http://www.youtube.com/embed/mzPxo7Y6JyA?autoplay=1&amp;fs=1&amp;loop=1&amp;rel=0&amp;showinfo=0&amp;color=white&amp;wmode=opaque";
    @endphp
    <div class="hero">
        <h4>NORWAY TOURS</h4>
        <h1>ROMANTIC HOLIDAYS IN NORWAY</h1>
        <p class="text-orange">FROM <span>$400</span> PER PERSON</p>
        <div class="play-button" id="playBtn">
            <i class="fa fa-play"></i>
        </div>
        <p>JULY <span>19TH</span> TO JULY <span>26TH</span></p>
        <p class="color-white-light">Curabitur nunc erat, consequat in erat ut, congue
            bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo
            elementum. Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
        <div class="buttons">
            <a href="#" class="c-button b-60 bg-red hv-red-o delay-2">
                <span>view more</span>
            </a>
            <a href="#" class="c-button b-60 bg-tr-1 hv-red delay-2">
                <span>book now</span>
            </a>
            {{-- <button class="btn btn-orange">VIEW MORE</button>
            <button class="btn btn-outline">BOOK NOW</button> --}}
        </div>
        <div class="popup" id="videoPopup">
            <span class="close" id="closePopup">&times;</span>

            <div id="videoContainer">
                <!-- Video will be injected here dynamically -->
            </div>
        </div>
    </div>
    <script>
        document.getElementById("playBtn").addEventListener("click", function () {
            let videoUrl = "{{ $videoUrl }}"; // Get dynamic video URL from Laravel
            let videoContainer = document.getElementById("videoContainer");
            videoContainer.innerHTML = ""; // Clear existing content

            if (videoUrl.includes("youtube.com") || videoUrl.includes("youtu.be")) {
                // Convert YouTube URL to embed format
                let embedUrl = videoUrl.replace("watch?v=", "embed/");
                embedUrl = embedUrl.replace("youtu.be/", "youtube.com/embed/");
                embedUrl += "?autoplay=1&fs=1&loop=1&rel=0&showinfo=0";

                videoContainer.innerHTML = `<iframe width="800" height="450" src="${embedUrl}" frameborder="0" allowfullscreen></iframe>`;
            } else {
                // Handle direct video file (MP4, WebM)
                videoContainer.innerHTML = `<video width="800" height="450" controls autoplay>
                    <source src="${videoUrl}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>`;
            }

            document.getElementById("videoPopup").style.display = "flex";
        });

        document.getElementById("closePopup").addEventListener("click", function () {
            document.getElementById("videoPopup").style.display = "none";
            document.getElementById("videoContainer").innerHTML = ""; // Stop video on close
        });
    </script>
</div>
