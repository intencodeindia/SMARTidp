<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 500">
                    <!-- Definitions for gradients and filters -->
                    <defs>
                        <!-- Metallic background gradient -->
                        <linearGradient id="metallic" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#2C3E50" />
                            <stop offset="100%" style="stop-color:#3498DB" />
                        </linearGradient>

                        <!-- Holographic effect -->
                        <linearGradient id="holographic" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:rgba(255,255,255,0.1)">
                                <animate attributeName="offset" from="0" to="1" dur="3s" repeatCount="indefinite" />
                            </stop>
                            <stop offset="20%" style="stop-color:rgba(255,255,255,0.3)">
                                <animate attributeName="offset" from="0.2" to="1.2" dur="3s" repeatCount="indefinite" />
                            </stop>
                        </linearGradient>

                        <!-- Glow effect -->
                        <filter id="glow">
                            <feGaussianBlur stdDeviation="2" result="coloredBlur" />
                            <feMerge>
                                <feMergeNode in="coloredBlur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>

                    <!-- Main card background -->
                    <rect x="100" y="50" width="600" height="400" rx="20" ry="20"
                        fill="url(#metallic)" filter="url(#glow)" />

                    <!-- Digital matrix pattern -->
                    <pattern id="matrix" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect width="2" height="2" fill="#ffffff10">
                            <animate attributeName="opacity" values="0.1;0.3;0.1" dur="2s" repeatCount="indefinite" />
                        </rect>
                    </pattern>
                    <rect x="100" y="50" width="600" height="400" rx="20" ry="20"
                        fill="url(#matrix)" opacity="0.1" />

                    <!-- Photo area with scanning effect -->
                    <g transform="translate(150,100)">
                        <!-- Photo frame -->
                        <rect x="0" y="0" width="150" height="200" rx="10" fill="#1a1a1a" />

                        <!-- Stylized person silhouette -->
                        <path d="M75,60 Q75,90 75,100 Q95,110 95,150 L55,150 Q55,110 75,100"
                            fill="#3498DB" opacity="0.8" />
                        <circle cx="75" cy="50" r="20" fill="#3498DB" opacity="0.8" />

                        <!-- Scanning animation -->
                        <rect x="0" y="0" width="150" height="5" fill="#3498DB" opacity="0.5">
                            <animate attributeName="y" values="0;200;0" dur="3s" repeatCount="indefinite" />
                        </rect>
                    </g>

                    <!-- Biometric face recognition grid -->
                    <g transform="translate(350,100)">
                        <!-- Face outline -->
                        <path d="M150,100 Q150,160 100,160 Q50,160 50,100 Q50,40 100,40 Q150,40 150,100"
                            fill="none" stroke="#3498DB" stroke-width="2" opacity="0.5" />

                        <!-- Recognition points -->
                        <circle cx="75" cy="70" r="2" fill="#3498DB">
                            <animate attributeName="r" values="2;4;2" dur="1s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="125" cy="70" r="2" fill="#3498DB">
                            <animate attributeName="r" values="2;4;2" dur="1s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="100" cy="100" r="2" fill="#3498DB">
                            <animate attributeName="r" values="2;4;2" dur="1s" repeatCount="indefinite" />
                        </circle>
                    </g>

                    <!-- ID Information -->
                    <g transform="translate(150,320)">
                        <!-- Name field -->
                        <rect x="0" y="0" width="200" height="30" rx="5" fill="#ffffff10" />
                        <text x="10" y="20" fill="white" font-family="Arial" font-size="14">NAME: JOHN DOE</text>

                        <!-- ID Number field -->
                        <rect x="0" y="40" width="200" height="30" rx="5" fill="#ffffff10" />
                        <text x="10" y="60" fill="white" font-family="Arial" font-size="14">ID: X7Y9-2024-ABC</text>
                    </g>

                    <!-- Security elements -->
                    <g transform="translate(400,320)">
                        <!-- QR Code placeholder -->
                        <rect x="0" y="0" width="70" height="70" rx="5" fill="#ffffff20" />
                        <path d="M10,10 h50 v50 h-50 z" fill="none" stroke="#3498DB" stroke-width="1">
                            <animate attributeName="stroke-dasharray" values="0,220;220,0" dur="3s" repeatCount="indefinite" />
                        </path>
                    </g>

                    <!-- Holographic overlay -->
                    <rect x="100" y="50" width="600" height="400" rx="20" ry="20"
                        fill="url(#holographic)" opacity="0.2" />
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 500">
                    <defs>
                        <!-- Tech background gradient -->
                        <linearGradient id="techGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" style="stop-color:#0A192F" />
                            <stop offset="100%" style="stop-color:#112240" />
                        </linearGradient>

                        <!-- Biometric scan gradient -->
                        <linearGradient id="scanGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#64FFDA00" />
                            <stop offset="50%" style="stop-color:#64FFDA" />
                            <stop offset="100%" style="stop-color:#64FFDA00" />
                        </linearGradient>

                        <!-- Glow effect -->
                        <filter id="glow">
                            <feGaussianBlur stdDeviation="3" result="coloredBlur" />
                            <feMerge>
                                <feMergeNode in="coloredBlur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>

                        <!-- Circuit pattern -->
                        <pattern id="circuit" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse">
                            <path d="M0,25 h50 M25,0 v50" stroke="#64FFDA" stroke-width="0.5" opacity="0.1" />
                            <circle cx="25" cy="25" r="1" fill="#64FFDA" opacity="0.2" />
                        </pattern>
                    </defs>

                    <!-- Background -->
                    <rect width="800" height="500" fill="url(#techGradient)" />
                    <rect width="800" height="500" fill="url(#circuit)" />

                    <!-- Central biometric circle -->
                    <g transform="translate(400,250)">
                        <!-- Outer rotating ring -->
                        <circle cx="0" cy="0" r="150" fill="none" stroke="#64FFDA" stroke-width="1" opacity="0.3">
                            <animateTransform attributeName="transform" type="rotate" from="0" to="360" dur="20s" repeatCount="indefinite" />
                        </circle>

                        <!-- Inner rotating ring -->
                        <circle cx="0" cy="0" r="120" fill="none" stroke="#64FFDA" stroke-width="2" opacity="0.5">
                            <animateTransform attributeName="transform" type="rotate" from="360" to="0" dur="15s" repeatCount="indefinite" />
                        </circle>

                        <!-- Biometric face outline -->
                        <path d="M0,-80 C60,-80 100,-40 100,0 C100,40 60,80 0,80 C-60,80 -100,40 -100,0 C-100,-40 -60,-80 0,-80"
                            fill="none" stroke="#64FFDA" stroke-width="2" opacity="0.8" filter="url(#glow)" />

                        <!-- Scanning animation -->
                        <rect x="-100" y="-100" width="200" height="200" fill="url(#scanGradient)" opacity="0.3">
                            <animate attributeName="y" values="-100;100;-100" dur="4s" repeatCount="indefinite" />
                        </rect>

                        <!-- Biometric points -->
                        <g id="bioPoints">
                            <circle cx="-40" cy="-20" r="3" fill="#64FFDA">
                                <animate attributeName="r" values="2;4;2" dur="2s" repeatCount="indefinite" />
                            </circle>
                            <circle cx="40" cy="-20" r="3" fill="#64FFDA">
                                <animate attributeName="r" values="2;4;2" dur="2s" repeatCount="indefinite" />
                            </circle>
                            <circle cx="0" cy="0" r="3" fill="#64FFDA">
                                <animate attributeName="r" values="2;4;2" dur="2s" repeatCount="indefinite" />
                            </circle>
                            <circle cx="-30" cy="30" r="3" fill="#64FFDA">
                                <animate attributeName="r" values="2;4;2" dur="2s" repeatCount="indefinite" />
                            </circle>
                            <circle cx="30" cy="30" r="3" fill="#64FFDA">
                                <animate attributeName="r" values="2;4;2" dur="2s" repeatCount="indefinite" />
                            </circle>
                        </g>

                        <!-- Connection lines -->
                        <g stroke="#64FFDA" stroke-width="1" opacity="0.5">
                            <line x1="-40" y1="-20" x2="40" y2="-20">
                                <animate attributeName="opacity" values="0.2;0.8;0.2" dur="3s" repeatCount="indefinite" />
                            </line>
                            <line x1="-30" y1="30" x2="30" y2="30">
                                <animate attributeName="opacity" values="0.2;0.8;0.2" dur="3s" repeatCount="indefinite" />
                            </line>
                            <line x1="-40" y1="-20" x2="-30" y2="30">
                                <animate attributeName="opacity" values="0.2;0.8;0.2" dur="3s" repeatCount="indefinite" />
                            </line>
                            <line x1="40" y1="-20" x2="30" y2="30">
                                <animate attributeName="opacity" values="0.2;0.8;0.2" dur="3s" repeatCount="indefinite" />
                            </line>
                        </g>
                    </g>

                    <!-- Floating data points -->
                    <g transform="translate(400,250)">
                        <circle cx="180" cy="-50" r="5" fill="#64FFDA" opacity="0.5">
                            <animate attributeName="r" values="3;6;3" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="-180" cy="50" r="5" fill="#64FFDA" opacity="0.5">
                            <animate attributeName="r" values="3;6;3" dur="2s" repeatCount="indefinite" />
                        </circle>
                    </g>
                </svg>


                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200">
                    <defs>
                        <!-- Gradient for text -->
                        <linearGradient id="textGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                            <stop offset="0%" style="stop-color:#64FFDA" />
                            <stop offset="100%" style="stop-color:#3498DB" />
                        </linearGradient>

                        <!-- Scanner line gradient -->
                        <linearGradient id="scannerGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" style="stop-color:#64FFDA00" />
                            <stop offset="50%" style="stop-color:#64FFDA" />
                            <stop offset="100%" style="stop-color:#64FFDA00" />
                        </linearGradient>

                        <!-- Glow filter -->
                        <filter id="titleGlow">
                            <feGaussianBlur stdDeviation="2" result="blur" />
                            <feMerge>
                                <feMergeNode in="blur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>

                    <!-- Background Tech Pattern -->
                    <rect width="800" height="200" fill="#0A192F" />

                    <!-- Main Title -->
                    <g transform="translate(400,100)" text-anchor="middle">
                        <!-- "SCAN" with typing effect -->
                        <text class="title-text" y="-40"
                            fill="url(#textGradient)"
                            font-family="Arial, sans-serif"
                            font-size="48"
                            font-weight="bold"
                            filter="url(#titleGlow)">
                            <tspan>
                                SCAN
                                <animate attributeName="opacity"
                                    values="0;1"
                                    dur="1s"
                                    begin="0s"
                                    fill="freeze" />
                            </tspan>
                        </text>

                        <!-- "YOUR DOCS" with fade in -->
                        <text class="title-text" y="20"
                            fill="url(#textGradient)"
                            font-family="Arial, sans-serif"
                            font-size="48"
                            font-weight="bold"
                            filter="url(#titleGlow)">
                            <tspan>
                                YOUR DOCS
                                <animate attributeName="opacity"
                                    values="0;1"
                                    dur="1s"
                                    begin="1s"
                                    fill="freeze" />
                            </tspan>
                        </text>

                        <!-- "INTELLIGENTLY" with fade in -->
                        <text class="title-text" y="80"
                            fill="url(#textGradient)"
                            font-family="Arial, sans-serif"
                            font-size="48"
                            font-weight="bold"
                            filter="url(#titleGlow)">
                            <tspan>
                                INTELLIGENTLY
                                <animate attributeName="opacity"
                                    values="0;1"
                                    dur="1s"
                                    begin="2s"
                                    fill="freeze" />
                            </tspan>
                        </text>

                        <!-- Scanning line animation -->
                        <rect x="-200" y="-60" width="400" height="160"
                            fill="url(#scannerGradient)"
                            opacity="0.3">
                            <animate attributeName="y"
                                values="-60;80;-60"
                                dur="3s"
                                repeatCount="indefinite" />
                        </rect>
                    </g>

                    <!-- Tech decoration elements -->
                    <g stroke="url(#textGradient)" stroke-width="1" opacity="0.3">
                        <!-- Left decorative lines -->
                        <line x1="50" y1="100" x2="150" y2="100">
                            <animate attributeName="x2"
                                values="50;150;50"
                                dur="2s"
                                repeatCount="indefinite" />
                        </line>
                        <!-- Right decorative lines -->
                        <line x1="650" y1="100" x2="750" y2="100">
                            <animate attributeName="x1"
                                values="750;650;750"
                                dur="2s"
                                repeatCount="indefinite" />
                        </line>
                    </g>

                    <!-- Floating particles -->
                    <g fill="url(#textGradient)">
                        <circle cx="200" cy="50" r="2">
                            <animate attributeName="opacity"
                                values="0;1;0"
                                dur="3s"
                                repeatCount="indefinite" />
                        </circle>
                        <circle cx="600" cy="150" r="2">
                            <animate attributeName="opacity"
                                values="0;1;0"
                                dur="3s"
                                begin="1s"
                                repeatCount="indefinite" />
                        </circle>
                    </g>
                </svg>