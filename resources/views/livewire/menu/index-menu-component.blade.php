@assets
	{{-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> --}}
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	<style>
		.whatsapp-container {
            position: fixed;
            bottom: 100px;
            right: 20px;
            z-index: 1000;
        }
        
        .whatsapp-bubble {
            position: relative;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 280px;
            overflow: hidden;
            animation: float 3s ease-in-out infinite;
            transform-origin: center bottom;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .whatsapp-header {
            background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
            color: white;
            padding: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
        }
        
        .header-info h3 {
            margin: 0;
            font-size: 16px;
            font-weight: 600;
        }
        
        .header-info p {
            margin: 0;
            font-size: 12px;
            opacity: 0.9;
        }
        
        .whatsapp-message {
            padding: 15px;
            background: #E5F7EE;
        }
        
        .message-bubble {
            background: white;
            border-radius: 10px;
            padding: 12px;
            margin-bottom: 10px;
            position: relative;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        
        .message-bubble::after {
            content: '';
            position: absolute;
            left: -8px;
            top: 15px;
            border-width: 8px 8px 8px 0;
            border-style: solid;
            border-color: transparent white transparent transparent;
        }
        
        .message-time {
            text-align: right;
            font-size: 10px;
            color: #8696A0;
        }
        
        .whatsapp-cta {
            display: flex;
            padding: 12px;
            background: white;
        }
        
        .cta-button {
            flex: 1;
            background: #25D366;
            color: white;
            border: none;
            border-radius: 30px;
            padding: 10px 15px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background: #128C7E;
            transform: translateY(-2px);
        }
        
        .notification-badge {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #FF3B30;
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
            border: 2px solid white;
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        /* Player styles */
        .player-container {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255, 255, 255, 0.95);
    border-top: 1px solid rgba(0,0,0,0.1);
    z-index: 900;
    backdrop-filter: blur(10px);
    box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
    margin: 0 10px 10px 10px;
    border-radius: 12px;
    overflow: hidden;
    transition: height 0.3s ease;
}

.player-header {
    background: linear-gradient(135deg, #FF4B4B 0%, #A70000 100%);
    color: white;
    padding: 12px 20px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.player-title {
    display: flex;
    align-items: center;
    gap: 10px;
}

.player-controls {
    padding: 15px 20px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.song-info {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.song-title {
    font-weight: 600;
    margin: 0;
}

.song-artist {
    font-size: 12px;
    color: #666;
    margin: 0;
}

.minimize-btn {
    background: transparent;
    border: none;
    color: white;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.minimize-btn:hover {
    transform: scale(1.1);
}

.minimized {
    height: 60px;
    overflow: hidden;
}

.minimized .player-controls {
    display: none;
}

.visualizer {
    display: flex;
    align-items: flex-end;
    height: 30px;
    gap: 3px;
    width: 40px;
}

.bar {
    background: white;
    width: 4px;
    height: 5px;
    border-radius: 1px;
    animation: sound 0ms -800ms linear infinite alternate;
    animation-play-state: paused;
}

@keyframes sound {
    0% {
        height: 5px;
    }
    100% {
        height: 25px;
    }
}

.bar:nth-child(1) { animation-duration: 474ms; }
.bar:nth-child(2) { animation-duration: 433ms; }
.bar:nth-child(3) { animation-duration: 407ms; }
.bar:nth-child(4) { animation-duration: 458ms; }
.bar:nth-child(5) { animation-duration: 400ms; }

/* Custom audio player styling */
.audio-player-wrapper {
    display: flex;
    align-items: center;
    gap: 10px;
    width: 60%;
}

.play-pause-btn, .mute-btn {
    background: #FF4B4B;
    color: white;
    border: none;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.2s;
}

.play-pause-btn:hover, .mute-btn:hover {
    background: #CC3939;
}

.progress-container {
    flex: 1;
    height: 6px;
    background-color: #e0e0e0;
    border-radius: 3px;
    cursor: pointer;
    position: relative;
}

.progress-bar {
    height: 100%;
    background-color: #FF4B4B;
    border-radius: 3px;
    width: 0;
}

.time-display {
    font-size: 12px;
    color: #666;
    min-width: 40px;
    text-align: center;
}

/**/
.testimonial-player {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #f5f5f5;
    border-radius: 20px;
    padding: 8px 12px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.testimonial-btn {
    width: 28px !important;
    height: 28px !important;
    min-width: 28px !important;
}

.testimonial-progress {
    height: 4px !important;
}

.testimonial-time {
    font-size: 11px !important;
    min-width: 35px !important;
}
    </style>
@endassets
@script
<script>
document.addEventListener('livewire:initialized', () => {
    
    // Obtener elementos del reproductor principal
    const audioElement = document.getElementById('audioElement');
    const playPauseBtn = document.getElementById('playPauseBtn');
    const playPauseIcon = playPauseBtn.querySelector('i');
    const progressBar = document.getElementById('progressBar');
    const timeDisplay = document.getElementById('timeDisplay');
    const togglePlayer = document.getElementById('togglePlayer');
    const playerContainer = document.getElementById('playerContainer');
    const bars = document.querySelectorAll('.bar');
    
    // Función para configurar un reproductor de audio de testimonios
    function setupTestimonialPlayer(audioId, playButtonId, progressBarId, timeDisplayId) {
        const audio = document.getElementById(audioId);
        const playButton = document.getElementById(playButtonId);
        const playIcon = playButton.querySelector('i');
        const progressBar = document.getElementById(progressBarId);
        const timeDisplay = document.getElementById(timeDisplayId);
        const progressContainer = progressBar.parentElement;
        
        // Función para pausar todos los audios (incluyendo el reproductor principal)
        function pauseAllAudios() {
            document.querySelectorAll('audio').forEach(a => {
                if (a !== audio && !a.paused) {
                    a.pause();
                    
                    // Manejar el reproductor principal
                    if (a.id === 'audioElement') {
                        const mainPlayBtn = document.getElementById('playPauseBtn');
                        if (mainPlayBtn) {
                            const mainIcon = mainPlayBtn.querySelector('i');
                            mainIcon.classList.remove('fa-pause');
                            mainIcon.classList.add('fa-play');
                        }
                        
                        // Pausar visualización
                        const bars = document.querySelectorAll('.bar');
                        bars.forEach(bar => {
                            bar.style.animationPlayState = 'paused';
                        });
                    } 
                    // Manejar reproductores de testimonios
                    else {
                        const button = document.getElementById(a.id.replace('audio', 'playButton'));
                        if (button) {
                            const icon = button.querySelector('i');
                            icon.classList.remove('fa-pause');
                            icon.classList.add('fa-play');
                        }
                    }
                }
            });
        }
        
        // Play/Pause
        playButton.addEventListener('click', () => {
            if (audio.paused) {
                pauseAllAudios(); // Pausar otros audios primero
                audio.play();
                playIcon.classList.remove('fa-play');
                playIcon.classList.add('fa-pause');
            } else {
                audio.pause();
                playIcon.classList.remove('fa-pause');
                playIcon.classList.add('fa-play');
            }
        });
        
        // Actualizar barra de progreso
        audio.addEventListener('timeupdate', () => {
            const progress = (audio.currentTime / audio.duration) * 100;
            progressBar.style.width = `${progress}%`;
            
            // Formatear tiempo (minutos:segundos)
            const minutes = Math.floor(audio.currentTime / 60);
            const seconds = Math.floor(audio.currentTime % 60).toString().padStart(2, '0');
            timeDisplay.textContent = `${minutes}:${seconds}`;
        });
        
        // Permitir saltar a una posición
        progressContainer.addEventListener('click', (e) => {
            const rect = progressContainer.getBoundingClientRect();
            const pos = (e.clientX - rect.left) / rect.width;
            audio.currentTime = pos * audio.duration;
        });
        
        // Cuando el audio termina
        audio.addEventListener('ended', () => {
            playIcon.classList.remove('fa-pause');
            playIcon.classList.add('fa-play');
            progressBar.style.width = '0';
            timeDisplay.textContent = '0:00';
        });
    }
    
    // Configurar reproductores de testimonios
    setupTestimonialPlayer('audio1', 'playButton1', 'progressBar1', 'timeDisplay1');
    setupTestimonialPlayer('audio2', 'playButton2', 'progressBar2', 'timeDisplay2');
    
    // Toggle minify player
    if (togglePlayer && playerContainer) {
        togglePlayer.addEventListener('click', function() {
            playerContainer.classList.toggle('minimized');
            const icon = this.querySelector('i');
            
            if (playerContainer.classList.contains('minimized')) {
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            } else {
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        });
    }
    
    // Play/Pause functionality para reproductor principal
    playPauseBtn.addEventListener('click', () => {
        // Pausar todos los reproductores de testimonios
        document.querySelectorAll('audio:not(#audioElement)').forEach(a => {
            if (!a.paused) {
                a.pause();
                const button = document.getElementById(a.id.replace('audio', 'playButton'));
                if (button) {
                    const icon = button.querySelector('i');
                    icon.classList.remove('fa-pause');
                    icon.classList.add('fa-play');
                }
            }
        });
        
        if (audioElement.paused) {
            audioElement.play();
            playPauseIcon.classList.remove('fa-play');
            playPauseIcon.classList.add('fa-pause');
            // Start visualization
            bars.forEach(bar => {
                bar.style.animationPlayState = 'running';
            });
        } else {
            audioElement.pause();
            playPauseIcon.classList.remove('fa-pause');
            playPauseIcon.classList.add('fa-play');
            // Pause visualization
            bars.forEach(bar => {
                bar.style.animationPlayState = 'paused';
            });
        }
    });
    
    // Update progress bar para reproductor principal
    audioElement.addEventListener('timeupdate', () => {
        const progress = (audioElement.currentTime / audioElement.duration) * 100;
        progressBar.style.width = `${progress}%`;
        
        // Format time display (minutes:seconds)
        const minutes = Math.floor(audioElement.currentTime / 60);
        const seconds = Math.floor(audioElement.currentTime % 60).toString().padStart(2, '0');
        timeDisplay.textContent = `${minutes}:${seconds}`;
    });
    
    // Allow seeking para reproductor principal
    const progressContainer = document.querySelector('.progress-container');
    progressContainer.addEventListener('click', (e) => {
        const rect = progressContainer.getBoundingClientRect();
        const pos = (e.clientX - rect.left) / rect.width;
        audioElement.currentTime = pos * audioElement.duration;
    });
    
    // Handle audio ended para reproductor principal
    audioElement.addEventListener('ended', () => {
        playPauseIcon.classList.remove('fa-pause');
        playPauseIcon.classList.add('fa-play');
        // Reset visualization
        bars.forEach(bar => {
            bar.style.animationPlayState = 'paused';
        });
    });
});
</script>
@endscript
<div>
<div class="fixed bottom-6 right-6 z-50 flex flex-col space-y-4">
<!-- WhatsApp Button with Enhanced Notification -->
<div class="whatsapp-container" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
	<div class="whatsapp-bubble">
		<div class="whatsapp-header">
			<div class="profile-icon">
                <i class="fas fa-headset"></i>
            </div>
			<div class="header-info">
				<h3>Laura Martínez</h3>
				<p>Disponible ahora</p>
			</div>
		</div>
		<div class="whatsapp-message">
			<div class="message-bubble">
				Hola! Te estoy esperando en el chat para agendar tu sesión de protección energética personalizada. ¿Hablamos?
                <div class="message-time">{{ now()->format('h:i A') }}</div>

			</div>
		</div>
		<div class="whatsapp-cta">
            <a href="https://wa.me/18147696863?text=Hola!%20Me%20gustaría%20solicitar%20una%20sesión%20de%20protección%20energética%20personalizada.%20¿Cuándo%20podríamos%20agendar%20mi%20primera%20consulta?" target="_blank" class="cta-button">
              <i class="fab fa-whatsapp"></i>
              Responder ahora
            </a>
          </div>
		<div class="notification-badge">1</div>
	</div>
</div>

<!-- Full Width Audio Player -->
<div class="player-container" id="playerContainer">
    <div class="player-header">
        <div class="player-title">
            <div class="visualizer">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <span class="mt-1">Testimonios reales, trabajo asegurado</span>
        </div>
        <button class="minimize-btn" id="togglePlayer">
            <i class="fas fa-chevron-down"></i>
        </button>
    </div>
    <div class="player-controls">
        <div class="song-info">
            <p class="song-title">Alicia Fuentes</p>
            <p class="song-artist">Amor, sanacion & protección</p>
        </div>
        <div class="audio-player-wrapper">
            <button id="playPauseBtn" class="play-pause-btn">
                <i class="fas fa-play"></i>
            </button>
            <div class="progress-container">
                <div id="progressBar" class="progress-bar"></div>
            </div>
            <div class="time-display" id="timeDisplay">0:00</div>
            {{-- <button id="muteBtn" class="mute-btn">
                <i class="fas fa-volume-up"></i>
            </button> --}}
            <!-- Audio element (hidden) -->
            <audio id="audioElement" preload="metadata">
                <source src="{{ Storage::disk('private')->temporaryUrl('audios/AUDIO-2025-03-29-18-13-04.m4a', now()->addMinutes(30)) }}" type="audio/mp4">
                Tu navegador no soporta el elemento de audio.
            </audio>
        </div>
    </div>
</div>
</div>

<main class="antialiased">
    
    <header x-data="{ open: false }" class="w-full text-gray-700 bg-red-200">
        <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
            <div class="flex flex-row items-center justify-between py-6">
                <div class="relative md:mt-8">
                    <a href="#" class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">Amarres y endulzamientos</a>
                    <img src="{{ Storage::disk('private')->temporaryUrl('img/corazon-logo.png', now()->addMinutes(30)) }}" class="h-11 z-40 absolute -top-2 -left-5" alt="Logo corazón">
                </div>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open" aria-label="Menú móvil">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <nav :class="{ 'transform md:transform-none': !open, 'h-full': open }" class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Servicios</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Testimonios</a>
                <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline" href="#">Nosotros</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-white text-gray-800 rounded-full md:mt-8 md:ml-4" href="#">Entrar a plataforma</a>
                <a class="px-10 py-3 mt-2 text-sm text-center bg-red-500 text-white rounded-full md:mt-8 md:ml-4" href="#">Registrate</a>
            </nav>
        </div>
    </header>

    <section class="bg-red-200">
        <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <article class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 lg:items-start lg:text-left text-center mb-5 md:mb-0">
                <h2 data-aos="fade-right" data-aos-once="true" class="my-4 text-4xl font-bold leading-tight text-darken">
                    <span class="text-red-700 text-5xl">Recupere a su amado</span> mantenga a los indeseados fuera de su relación. <br> Asegure la permanencia del amor.
                </h2>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="sm:pl-[20px] text-2xl mb-8">Obtenga resultados y un amor auténtico</p>
                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                    <button onclick="document.getElementById('amarres-section').scrollIntoView({behavior: 'smooth',block: 'start'});" class="cursor-pointer lg:mx-0 bg-red-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        Conoce nuestros servicios
                    </button>
                </div>
                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="800" class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5 mt-6">
                    <button class="lg:mx-0 opacity-100 bg-[#2a2463]/50 text-white text-xl font-bold rounded py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-400 ease-in-out">
                        ANÍMATE A BUSCAR UNA SOLUCIÓN A CUALQUIERA QUE SEA EL PROBLEMA QUE TE ESTÁ ARREBATANDO TU TRANQUILIDAD Y FUTURO⬇️
                    </button>
                </div>
            </article>
                
            <!--Right Col-->
            <figure class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
                <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20" src="{{ Storage::disk('private')->temporaryUrl('img/wizard.png', now()->addMinutes(30)) }}" alt="Ilustración de mago">
                <!-- calendar -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true" class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="{{ Storage::disk('private')->temporaryUrl('img/calendar.svg', now()->addMinutes(30)) }}" alt="Icono de calendario">
                </div>
                <!-- red -->
                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true" class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                    <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                            <rect x="40" y="32" width="69" height="69" rx="14" fill="#F3627C"/>
                        </g>
                        <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white"/>
                        <!-- Candelabro/Chandelier -->
                        <path d="M74.5 47.5V52" stroke="#F25471" stroke-width="2" stroke-linecap="round"/>
                        <path d="M74.5 52C68.5 52 68.5 55 74.5 55C80.5 55 80.5 52 74.5 52" stroke="#F25471" stroke-width="2"/>
                        <path d="M74.5 55V60" stroke="#F25471" stroke-width="2" stroke-linecap="round"/>
                        <!-- Central stem -->
                        <path d="M74.5 60V78.575" stroke="#F25471" stroke-width="3" stroke-linecap="round"/>
                        <!-- Arms -->
                        <path d="M74.5 60C65 60 60 65 65.875 78.575" stroke="#F25471" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M74.5 60C84 60 89 65 83.125 78.575" stroke="#F25471" stroke-width="2.5" stroke-linecap="round"/>
                        <!-- Candles -->
                        <circle cx="65.875" cy="73" r="1.5" fill="#F25471"/>
                        <circle cx="74.5" cy="73" r="1.5" fill="#F25471"/>
                        <circle cx="83.125" cy="73" r="1.5" fill="#F25471"/>
                        <!-- Candle flames -->
                        <path d="M65.875 69C65.875 67 66.875 68 65.875 66" stroke="#F25471" stroke-width="1" stroke-linecap="round"/>
                        <path d="M74.5 69C74.5 67 75.5 68 74.5 66" stroke="#F25471" stroke-width="1" stroke-linecap="round"/>
                        <path d="M83.125 69C83.125 67 84.125 68 83.125 66" stroke="#F25471" stroke-width="1" stroke-linecap="round"/>
                        <!-- Base -->
                        <path d="M61 78.575H88" stroke="#F25471" stroke-width="3" stroke-linecap="round"/>
                        <defs>
                            <filter id="filter0_d" x="0" y="0" width="149" height="149" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset dy="8"/>
                                <feGaussianBlur stdDeviation="20"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                            </filter>
                        </defs>
                    </svg>
                </div>
                <!-- ux class -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true" class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
                    <img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="{{ Storage::disk('private')->temporaryUrl('img/ux-class.svg', now()->addMinutes(30)) }}" alt="Icono de clase UX">
                </div>
                <!-- congrats -->
                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true" class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                    <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="{{ Storage::disk('private')->temporaryUrl('img/congrat.svg', now()->addMinutes(30)) }}" alt="Icono de felicitaciones">
                </div>
            </figure>
        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-20 -mt-px"></div>
        </div>
    </section>

    <!-- container -->
    <section id="amarres-section" class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

        <!-- All-In-One Cloud Software. -->
        <article data-aos="flip-up" class="max-w-xl mx-auto text-center mt-10">
            <h1 class="font-bold text-darken my-3 text-2xl">Amarres de <span class="text-red-500">amor</span></h1>
            <p class="leading-relaxed text-gray-500">Desde que tu ser querido se distanció, ha experimentado angustia, desequilibrio emocional, insomnio y agotamiento. Detén ese sufrimiento, con nuestros rituales de amor, recobra tu paz, tu bienestar y recupera la felicidad. Nuestro mentor y maestro espiritual <br> <span class="font-semibold text-lg">Joaquín Pascal</span><br> junto todo un equipo de profesionales están aquí para asistirte y ofrecerte orientación. </p>
        </article>
        <!-- card -->
        <div class="grid md:grid-cols-4 gap-14 md:gap-5 mt-20">
            <article data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #FF4B91;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="white"/>
                    </svg>
                </div>
                <h2 class="font-medium text-xl mb-3 lg:px-14 text-darken">Amarres de Amor</h2>
                <p class="px-4 text-gray-500">Contamos con la sabiduría y toda la experiencia para traer de vuelta a su ser querido de manera efectiva.</p>
            </article>
        
            <article data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #9B4BFF;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71z" fill="white"/>
                    </svg>
                </div>
                <h2 class="font-medium text-xl mb-3 lg:px-14 text-darken">Conjuros</h2>
                <p class="px-4 text-gray-500">Reciba un apoyo adicional que lo encaminará hacia la solución de sus problemas afectivos.</p>
            </article>
        
            <article data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #4B91FF;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2v20m-7-7l7 7l7-7M7.05 8.1C5.05 6.1 4 4.5 4 3c0-1.1.9-2 2-2c1.5 0 3 1.1 5 3c2-1.9 3.5-3 5-3c1.1 0 2 .9 2 2c0 1.5-1.05 3.1-3.05 5.1L12 11l-4.95-2.9z" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h2 class="font-medium text-xl mb-3 lg:px-14 text-darken">Rituales</h2>
                <p class="px-4 text-gray-500">Practique un ritual que eleve su productividad y optimice su rendimiento en el trabajo.</p>
            </article>
        
            <article data-aos="fade-up" data-aos-delay="450" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #4BFF91;" class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="white"/>
                    </svg>
                </div>
                <h2 class="font-medium text-xl mb-3 lg:px-14 text-darken">Limpiezas</h2>
                <p class="px-4 text-gray-500">Purificamos las energías negativas que lo están debilitando espiritualmente.</p>
            </article>
        </div>

        <!-- lorem -->
        <section data-aos="flip-down" class="text-center max-w-screen-md mx-auto mt-12">
            <div class="relative bg-gradient-to-b from-red-500 to-red-600 p-8 rounded-xl shadow-2xl border-2 border-red-400">
                <!-- Icono +18 Esquina Superior Izquierda -->
                <div class="absolute -top-6 -left-6 bg-black rounded-full w-14 h-14 flex items-center justify-center shadow-lg border-2 border-red-500">
                    <span class="animate-pulse text-red-500 font-bold text-xl">+18</span>
                </div>
                
                <!-- Icono +18 Esquina Superior Derecha -->
                <div class="absolute -top-6 -right-6 bg-black rounded-full w-14 h-14 flex items-center justify-center shadow-lg border-2 border-red-500">
                    <span class="animate-pulse text-red-500 font-bold text-xl">+18</span>
                </div>
        
                <!-- Contenido Principal -->
                <div class="space-y-6">
                    <!-- Título de Advertencia -->
                    <div class="flex items-center justify-center space-x-3">
                        <svg class="w-8 h-8 text-white animate-pulse" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 9V14M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 17H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <h2 class="text-4xl font-black text-white tracking-wider">ADVERTENCIA</h2>
                        <svg class="w-8 h-8 text-white animate-pulse" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 9V14M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM12 17H12.01" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
        
                    <!-- Contenedor del Mensaje -->
                    <div class="bg-white/10 backdrop-blur-sm p-6 rounded-lg border border-white/20">
                        <p class="text-white text-xl font-medium mb-4">Este sitio contiene material exclusivamente para</p>
                        <div class="flex items-center justify-center space-x-3 mb-4">
                            
                            <p class="text-3xl font-black text-white animate-bounce">MAYORES DE 18 AÑOS</p>
                            
                        </div>
                    </div>
        
                    <!-- Línea Decorativa -->
                    <div class="flex items-center justify-center space-x-2">
                        <div class="w-16 h-1 bg-white rounded"></div>
                        <div class="w-4 h-1 bg-white rounded"></div>
                        <div class="w-2 h-1 bg-white rounded"></div>
                    </div>
                </div>
            </div>

            <!-- Latest News and Resources -->
            <article data-aos="zoom-in" class="mt-16 text-center">
                <h2 class="text-darken text-2xl font-semibold">NUESTROS SERVICIOS</h2>
                <p class="text-gray-500 my-5">Practicamos los más poderosos rituales MILENARIOS para el amor y la suerte, es hora de cambiar su vida, además limpiamos esas malas energías que por lo general lo destruyen, y como es de esperar se presentan en cada situación.</p>
            </article>
            <article data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">
                <div class="lg:w-6/12">
                    <img class="w-full mb-6 rounded-md" src="{{ Storage::disk('private')->temporaryUrl('img/rituales.jpg', now()->addMinutes(30)) }}" alt="Rituales de amor">
                
                    <span class="animate-pulse bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">Más vendido!</span>
                    <h2 class="text-gray-800 font-semibold my-3 text-xl">AMARRES Y RETORNOS DE AMOR</h2>
                    <p class="text-gray-500 mb-3">Los amarres y retornos de amor se adaptan a la situación del individuo que desee el hechizo de amor, para obtener el beneficio del cariño de la persona que este desea amarrar o retornar.
                    </p>
                    <div class="animate-pulse flex justify-center items-center gap-2">
                        <svg class="w-5 h-5" fill="#25D366" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        <a href="https://wa.me/18147696863?text=Hola%2C%20me%20interesa%20conocer%20más%20información%20sobre%20sus%20servicios%20de%20protección%20energética.%20¿Podría%20compartirme%20detalles%20sobre%20las%20opciones%20disponibles%3F" class="text-green-500 hover:text-green-600 font-medium flex items-center transition-colors duration-200">
                          Más info
                        </a>
                    </div>
                </div>
                <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
                    <article class="flex space-x-5">
                        <figure class="w-4/12">
                            <div class="relative">
                                <img class="rounded-xl w-full" src="{{ Storage::disk('private')->temporaryUrl('img/conjuros.jpg', now()->addMinutes(30)) }}" alt="Hechizos de amor">
                            </div>
                        </figure>
                        <div class="w-8/12">
                            <h2 class="text-gray-800 text-sm sm:text-lg font-semibold">HECHIZOS DE AMOR</h2>
                            <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Los hechizos usan fotos, nombres y fechas de nacimiento, y pueden incluir velas, esencias, rezos, quemas y endulzamientos.</p>
                        </div>
                    </article>
                    <article class="flex space-x-5">
                        <figure class="w-4/12">
                            <div class="relative">
                                <img class="rounded-xl w-full" src="{{ Storage::disk('private')->temporaryUrl('img/union-de-parejas.jpg', now()->addMinutes(30)) }}" alt="Unión de parejas">
                            </div>
                        </figure>
                        <div class="w-8/12">
                            <h2 class="text-gray-800 text-sm sm:text-lg font-semibold">UNIÓN DE PAREJAS</h2>
                            <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">La magia erótica une a dos personas al guardar en un candado objetos personales de ambos.</p>
                        </div>
                    </article>
                    <article class="flex space-x-5">
                        <figure class="w-4/12">
                            <div class="relative">
                                <img class="rounded-xl w-full" src="{{ Storage::disk('private')->temporaryUrl('img/Limpiezas.png', now()->addMinutes(30)) }}" alt="Limpieza espiritual">
                            </div>
                        </figure>
                        <div class="w-8/12">
                            <h2 class="text-gray-800 text-sm sm:text-lg font-semibold">LIMPIEZA ESPÍRITUAL</h2>
                            <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Si te sientes agotado, con pensamientos negativos o tristeza, necesitas purificar tu energía y espíritu.</p>
                        </div>
                    </article>
                    <article class="flex space-x-5">
                        <figure class="w-4/12">
                            <div class="relative">
                                <img class="rounded-xl w-full" src="{{ Storage::disk('private')->temporaryUrl('img/rituales-de-atraccion.png', now()->addMinutes(30)) }}" alt="Rituales de atracción">
                            </div>
                        </figure>
                        <div class="w-8/12">
                            <h2 class="text-gray-800 text-sm sm:text-lg font-semibold">RITUALES DE ATRACCIÓN</h2>
                            <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Los rituales de atracción buscan atraer energías positivas, prosperidad, cumplir deseos o enamorar a alguien.</p>
                        </div>
                    </article>
                </div>
            </article>
        </section>

        <!-- Punto Físico - Sección Destacada -->
        <section data-aos="fade-up" class="mt-20 py-12 bg-gradient-to-r from-purple-900 via-purple-800 to-purple-900 rounded-3xl shadow-2xl relative overflow-hidden">
            <!-- Elementos decorativos de fondo -->
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-xl"></div>
                <div class="absolute bottom-10 right-10 w-40 h-40 bg-white/5 rounded-full blur-xl"></div>
                <div class="absolute top-1/3 right-1/4 w-24 h-24 bg-purple-500/10 rounded-full blur-lg"></div>
            </div>
            
            <!-- Contenido principal -->
            <div class="relative z-10 max-w-5xl mx-auto px-6">
                <!-- Encabezado con decoración -->
                <div class="flex items-center justify-center mb-8">
                    <div class="h-0.5 w-12 bg-purple-300"></div>
                    <div class="mx-4">
                        <span class="inline-block px-4 py-1 bg-purple-700 text-purple-100 text-xs font-medium tracking-wider uppercase rounded-full">Nuevo</span>
                    </div>
                    <div class="h-0.5 w-12 bg-purple-300"></div>
                </div>
                
                <!-- Título principal animado -->
                <h2 class="text-4xl md:text-5xl font-extrabold text-center text-white mb-6 tracking-tight">
                    <span class="animate-pulse">¡TE INVITAMOS A QUE CONOZCAS</span>
                    <span class="block mt-2 text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-yellow-400">NUESTRO PUNTO FÍSICO!</span>
                </h2>
                
                <!-- Descripción -->
                <p class="text-purple-100 text-center text-lg mb-10 max-w-3xl mx-auto">
                    Te brindaremos toda la información necesaria por nuestros canales de atención para que puedas visitarnos y experimentar nuestros servicios de protección energética en persona.
                </p>
                
                <!-- Tarjeta de información del local -->
                <article class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-purple-300/30 shadow-xl">
                    <div class="flex flex-col md:flex-row gap-8">
                        <!-- Lado izquierdo - Imágenes y detalles -->
                        <div class="md:w-1/2">
                            <!-- Mini galería -->
                            <div class="grid grid-cols-3 gap-2 mb-6">
                                <div class="aspect-square bg-purple-800/70 rounded-lg overflow-hidden">
                                    <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-purple-800/20 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-purple-200" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 22C6.48 22 2 17.52 2 12S6.48 2 12 2s10 4.48 10 10-4.48 10-10 10zm-1-17.93c-3.94.49-7 3.85-7 7.93s3.06 7.44 7 7.93V4.07z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aspect-square bg-purple-800/70 rounded-lg overflow-hidden col-span-2">
                                    <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-purple-800/20 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-purple-200" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17 4v7l2 3v2h-6v5l-1 1-1-1v-5H5v-2l2-3V4c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2zM9 4v7.75L7.5 14h9L15 11.75V4H9z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aspect-square bg-purple-800/70 rounded-lg overflow-hidden col-span-2">
                                    <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-purple-800/20 flex items-center justify-center">
                                        <svg class="w-12 h-12 text-purple-200" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="aspect-square bg-purple-800/70 rounded-lg overflow-hidden">
                                    <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-purple-800/20 flex items-center justify-center">
                                        <svg class="w-10 h-10 text-purple-200" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Características del local -->
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-700/50 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-purple-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-purple-100 font-semibold">Espacio acogedor</h4>
                                        <p class="text-purple-200/80 text-sm">Ambiente diseñado para tu confort espiritual</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-700/50 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-purple-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-purple-100 font-semibold">Ubicación estratégica</h4>
                                        <p class="text-purple-200/80 text-sm">Fácil acceso y estacionamiento disponible</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-700/50 flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-purple-100" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-purple-100 font-semibold">Horario extendido</h4>
                                        <p class="text-purple-200/80 text-sm">Atención personalizada con cita previa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Lado derecho - Información de contacto y CTA -->
                        <div class="md:w-1/2 flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-bold text-white mb-4">Información de contacto</h3>
                                
                                <!-- Detalles de contacto -->
                                <div class="space-y-5 mb-8">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-6 h-6 text-yellow-300 mt-1">
                                            <svg fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="text-purple-100 font-medium">Dirección</h4>
                                            <p class="text-purple-200/90">Solicita nuestra ubicación exacta por WhatsApp</p>
                                        </div>
                                    </div>
                                    
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0 w-6 h-6 text-yellow-300 mt-1">
                                            <svg fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h4 class="text-purple-100 font-medium">Teléfono</h4>
                                            <p class="text-purple-200/90">+1 814 769 6863</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Botón CTA -->
                            <div class="mt-4">
                                <a href="https://wa.me/18147696863?text=Hola%2C%20me%20gustaría%20agendar%20una%20visita%20a%20su%20local%20físico%20para%20conocer%20más%20sobre%20sus%20servicios%20energéticos.%20¿Podrían%20proporcionarme%20la%20dirección%20y%20los%20horarios%20disponibles%3F" class="block w-full bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-yellow-500/25 text-center">
                                    <div class="flex items-center justify-center">
                                        <svg class="w-6 h-6 mr-2" fill="#25D366" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>              
                                        </svg>
                                        Agendar visita ahora
                                    </div>
                                </a>
                                
                                <p class="text-xs text-center text-purple-200/70 mt-3">Respuesta garantizada en menos de 24 horas</p>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Pie de la sección -->
                <div class="mt-8 text-center">
                    <p class="text-purple-200/80 text-sm">
                        <span class="font-semibold">⭐ Más de 1000 clientes satisfechos</span> • Ambiente seguro y discreto • Estacionamiento disponible
                    </p>
                </div>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center text-red-600 mb-4">Testimonios de Nuestros Clientes</h2>
                <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Personas reales que han recuperado el amor gracias a nuestros servicios</p>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <article class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
                        <!-- Imagen de usuario añadida -->
                        <div class="flex justify-center mb-4">
                            <img src="{{ Storage::disk('private')->temporaryUrl('img/testimonios/testimonio4.jpg', now()->addMinutes(30)) }}" 
                                 alt="María G." 
                                 class="w-20 h-20 rounded-full object-cover border-2 border-red-400">
                        </div>
                        <div class="flex gap-2 items-center mb-4">
                            <div class="text-yellow-400 text-xl relative">
                                ★★★★★
                            </div>
                            <span class="ml-2 text-gray-700 font-medium">4.8</span>
                        </div>
                        <p class="text-gray-700 mb-4 italic">"Después de 3 meses separados, mi esposo volvió a casa gracias al amarre. No podía creerlo cuando me pidió perdón y dijo que no podía vivir sin mí. ¡Funcionó en solo 2 semanas!"</p>
                        <p class="font-semibold text-gray-900">- María G. (Boston Massachusetts)</p>
                        
                        <!-- Reproductor de audio personalizado -->
                        <div class="mt-4 testimonial-player" id="player1Container">
                            <button class="play-pause-btn testimonial-btn" id="playButton1">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="progress-container testimonial-progress">
                                <div id="progressBar1" class="progress-bar"></div>
                            </div>
                            <div class="time-display testimonial-time" id="timeDisplay1">0:00</div>
                            <!-- Audio element (hidden) -->
                            <audio id="audio1" preload="metadata">
                                <source src="{{ Storage::disk('private')->temporaryUrl('audios/mujer1.m4a', now()->addMinutes(30)) }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                        </div>
                    </article>
                    
                    <!-- Testimonio 2 con audio personalizado - 5 estrellas -->
                    <article class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="150">
                        <!-- Imagen de usuario añadida -->
                        <div class="flex justify-center mb-4">
                            <img src="{{ Storage::disk('private')->temporaryUrl('img/testimonios/testimonio2.jpeg', now()->addMinutes(30)) }}" 
                                 alt="Carlos R." 
                                 class="w-20 h-20 rounded-full object-cover border-2 border-red-400">
                        </div>
                        <div class="flex gap-2 items-center mb-4">
                            <div class="text-yellow-400 text-xl">
                                ★★★★★
                            </div>
                            <span class="ml-2 text-gray-700 font-medium">5.0</span>
                        </div>
                        <p class="text-gray-700 mb-4 italic">"Mi novia me había dejado por otro y estaba devastado. Contacté a Joaquín y en menos de un mes ella rompió con el otro y volvió arrepentida. ¡Los resultados son increíbles!"</p>
                        <p class="font-semibold text-gray-900">- Carlos R. (El Paso Texas)</p>
                        
                        <!-- Reproductor de audio personalizado -->
                        <div class="mt-4 testimonial-player" id="player2Container">
                            <button class="play-pause-btn testimonial-btn" id="playButton2">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="progress-container testimonial-progress">
                                <div id="progressBar2" class="progress-bar"></div>
                            </div>
                            <div class="time-display testimonial-time" id="timeDisplay2">0:00</div>
                            <!-- Audio element (hidden) -->
                            <audio id="audio2" preload="metadata">
                                <source src="{{ Storage::disk('private')->temporaryUrl('audios/hombre1.m4a', now()->addMinutes(30)) }}" type="audio/mp4">
                                Tu navegador no soporta el elemento de audio.
                            </audio>
                        </div>
                    </article>
                    
                    <!-- Testimonio 3 - 4.5 estrellas -->
                    <article class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <!-- Imagen de usuario añadida -->
                        <div class="flex justify-center mb-4">
                            <img src="{{ Storage::disk('private')->temporaryUrl('img/testimonios/testimonio2.jpg', now()->addMinutes(30)) }}" 
                                 alt="Laura M." 
                                 class="w-20 h-20 rounded-full object-cover border-2 border-red-400">
                        </div>
                        <div class="flex gap-2 items-center mb-4">
                            <div class="text-yellow-400 text-xl relative">
                                ★★★★★
                            </div>
                            <span class="ml-2 text-gray-700 font-medium">4.5</span>
                        </div>
                        <p class="text-gray-700 mb-4 italic">"No creía en estas cosas pero estaba desesperada. Mi esposo llevaba 6 meses viviendo con otra mujer. Hice el ritual y en 3 semanas terminó esa relación y volvió a casa pidiendo reconciliación."</p>
                        <p class="font-semibold text-gray-900">- Laura M. (Hartford Connecticut)</p>
                    </article>
                    
                    <!-- Testimonio 4 - Sin puntuación completa -->
                    <article class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="450">
                        <!-- Imagen de usuario añadida -->
                        <div class="flex justify-center mb-4">
                            <img src="{{ Storage::disk('private')->temporaryUrl('img/testimonios/testimonio3.jpg', now()->addMinutes(30)) }}" 
                                 alt="Ana T." 
                                 class="w-20 h-20 rounded-full object-cover border-2 border-red-400">
                        </div>
                        <div class="flex gap-2 items-center mb-4">
                            <div class="text-gray-300 text-xl">
                                ★★★★★
                            </div>
                            <span class="ml-2 text-gray-500 font-medium">Sin calificar</span>
                        </div>
                        <p class="text-gray-700 mb-4 italic">"Después de 2 años divorciados, mi ex esposo empezó a buscarme constantemente tras el ritual. Ahora estamos reconstruyendo nuestra relación y más enamorados que nunca. ¡Gracias por devolverme mi familia!"</p>
                        <p class="font-semibold text-gray-900">- Ana T. (St Louis Missouric)</p>
                    </article>
                </div>
                
                <div class="text-center mt-12">
                    <a href="#contacto" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 inline-block">
                        Quiero mi consulta gratuita
                    </a>
                </div>
            </div>
        </section>
    </section>
</main>
