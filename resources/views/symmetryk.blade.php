<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Symmetryk</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="/css/list.css">
    <style>
        .sym-w-left {
            width: 265px;
        }
        @keyframes bounceInLeft {
            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0);
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0);
                transform: translate3d(25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .menu-item:hover i {
            animation-name: bounceInLeft;
            animation-duration: 0.5s;
        }
    </style>
</head>
<body class="bg-grey-lighter font-sans antialiased text-grey-darker">
<div class="top-bar bg-white shadow grid grid-columns-12 justify-between">
    <a href="#" class="col-span-1 logo-container bg-blue p-3">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
             viewBox="0 0 1090 270"
             height="60"
             class="fill-current text-white"
             xml:space="preserve">
            <path d="M199.509,274.331H39.307c-19.354,0-35.043-15.33-35.043-34.246V93.308c0-18.916,15.688-34.248,35.043-34.248
                h160.202c19.355,0,35.043,15.332,35.043,34.248v146.776C234.552,259,218.864,274.331,199.509,274.331z M214.528,144.167h-5.007
                H104.389H94.376c-5.529,0-10.012-4.479-10.012-10.011c0-5.53,4.483-10.014,10.012-10.014h10.013h105.132h5.007V98.554
                c0-10.751-8.736-19.468-19.513-19.468H43.8c-10.776,0-19.513,8.717-19.513,19.468v90.67h5.007h105.132h10.014
                c5.528,0,10.012,4.483,10.012,10.013c0,5.535-4.484,10.014-10.012,10.014h-10.014H29.294h-5.007v25.588
                c0,10.752,8.737,19.469,19.513,19.469h151.215c10.776,0,19.513-8.717,19.513-19.469V144.167z M151.954,48.466
                c-1.184,0.392-2.39,0.572-3.574,0.572c-4.62,0-8.928-2.806-10.497-7.279c-3.427-9.739-12.844-17.743-23.482-17.743
                c-10.589,0-20.044,7.964-23.496,17.649c-1.995,5.603-8.302,8.595-14.1,6.649c-5.789-1.931-8.863-8.037-6.869-13.65
                C76.467,16.321,94.328,4,114.377,4c20.137,0,38.021,12.394,44.504,30.839C160.852,40.458,157.752,46.555,151.954,48.466z"></path>
            <g>
                <path d="M304.332,131.649c-13.326,0-18.303,6.262-18.303,12.684c0,21.033,58.602,11.24,58.602,51.377
                    c0,19.588-13.808,31.791-40.299,31.791c-19.106,0-34.358-9.474-40.62-19.588c-0.803-1.285-1.284-2.891-1.284-4.496
                    c0-4.815,3.853-8.67,8.509-8.67c3.532,0,5.458,1.928,7.064,3.532c6.744,6.743,15.253,12.202,26.331,12.202
                    c14.61,0,21.674-4.816,21.674-14.771c0-23.439-58.602-12.684-58.602-51.377c0-15.895,11.399-29.38,36.927-29.38
                    c16.055,0,30.023,5.94,36.445,15.092c0.963,1.445,1.605,3.211,1.605,5.138c0,4.656-3.853,8.51-8.67,8.51
                    c-2.248,0-4.495-1.285-6.904-3.531C321.832,135.342,313.483,131.649,304.332,131.649z"></path>
                <path d="M388.624,158.301l24.244-38.05c1.604-2.569,4.495-4.335,7.867-4.335c5.138,0,9.312,4.174,9.312,9.312
                    c0,1.766-0.48,3.692-1.445,4.978l-30.665,45.757v41.263c0,5.138-4.173,9.312-9.312,9.312s-9.312-4.174-9.312-9.312v-41.263
                    l-30.666-45.757c-0.963-1.285-1.445-3.212-1.445-4.978c0-5.138,4.175-9.312,9.312-9.312c3.372,0,6.101,1.605,7.867,4.335
                    L388.624,158.301z"></path>
                <path d="M479.818,203.738l-25.207-44.795v58.44c0,4.979-4.174,9.152-9.151,9.152c-4.977,0-9.151-4.175-9.151-9.152
                    v-92.317c0-4.977,4.175-9.151,9.151-9.151c4.014,0,6.583,2.248,8.188,5.138l34.036,61.01l34.037-61.01
                    c1.605-2.89,4.175-5.138,8.188-5.138c4.977,0,9.15,4.174,9.15,9.151v92.317c0,4.979-4.175,9.152-9.15,9.152
                    c-4.979,0-9.151-4.175-9.151-9.152v-58.44l-25.207,44.795c-1.604,2.89-4.655,4.495-7.867,4.495
                    C484.474,208.233,481.423,206.627,479.818,203.738z"></path>
                <path d="M595.417,203.738l-25.205-44.795v58.44c0,4.979-4.176,9.152-9.152,9.152s-9.15-4.175-9.15-9.152v-92.317
                    c0-4.977,4.174-9.151,9.15-9.151c4.016,0,6.582,2.248,8.188,5.138l34.037,61.01l34.037-61.01c1.605-2.89,4.176-5.138,8.188-5.138
                    c4.979,0,9.152,4.174,9.152,9.151v92.317c0,4.979-4.174,9.152-9.152,9.152c-4.977,0-9.15-4.175-9.15-9.152v-58.44l-25.207,44.795
                    c-1.605,2.89-4.656,4.495-7.867,4.495S597.024,206.627,595.417,203.738z"></path>
                <path d="M686.934,162.637h30.344c4.496,0,8.188,3.691,8.188,8.188s-3.691,8.188-8.188,8.188h-30.344v29.542h42.547
                    c4.654,0,8.348,3.691,8.348,8.349s-3.691,8.349-8.348,8.349h-51.859c-5.137,0-9.311-4.174-9.311-9.312v-89.428
                    c0-5.138,4.174-9.312,9.311-9.312h50.094c4.654,0,8.35,3.693,8.35,8.349c0,4.656-3.693,8.349-8.35,8.349h-40.779v28.738H686.934z"
                ></path>
                <path d="M791.778,133.576v83.648c0,5.138-4.176,9.312-9.312,9.312s-9.312-4.174-9.312-9.312v-83.648h-24.564
                    c-4.494,0-8.188-3.692-8.188-8.188c0-4.495,3.691-8.188,8.188-8.188h67.754c4.496,0,8.189,3.693,8.189,8.188
                    c0,4.496-3.693,8.188-8.189,8.188H791.778z"></path>
                <path d="M850.54,183.829v33.396c0,5.138-4.174,9.312-9.312,9.312c-5.137,0-9.311-4.175-9.311-9.312v-90.713
                    c0-5.138,4.174-9.312,9.311-9.312h30.666c21.676,0,33.877,15.414,33.877,33.556c0,15.252-9.312,30.021-24.725,31.949l23.762,28.898
                    c1.443,1.928,1.928,3.854,1.928,5.62c0,5.138-4.176,9.312-9.312,9.312c-2.729,0-5.619-1.283-7.225-3.371l-29.223-39.336H850.54z
                     M850.54,133.897v33.557h21.676c9.955,0,14.289-8.188,14.289-16.697c0-8.67-4.334-16.858-14.77-16.858L850.54,133.897
                    L850.54,133.897z"></path>
                <path d="M951.047,158.301l24.244-38.05c1.605-2.569,4.494-4.335,7.867-4.335c5.137,0,9.311,4.174,9.311,9.312
                    c0,1.766-0.48,3.692-1.443,4.978l-30.666,45.757v41.263c0,5.138-4.174,9.312-9.312,9.312c-5.137,0-9.311-4.174-9.311-9.312v-41.263
                    l-30.666-45.757c-0.963-1.285-1.445-3.212-1.445-4.978c0-5.138,4.174-9.312,9.312-9.312c3.371,0,6.102,1.605,7.867,4.335
                    L951.047,158.301z"></path>
                <path d="M1018.159,161.995l38.533-43.029c1.928-2.087,4.336-3.05,6.744-3.05c4.977,0,8.99,4.014,8.99,8.991
                    c0,2.569-0.965,4.495-2.408,6.102l-30.186,32.751l35.482,48.328c1.125,1.443,1.768,3.371,1.768,5.297
                    c0,4.979-4.176,9.152-9.152,9.152c-3.854,0-6.262-2.248-7.547-4.015l-33.072-45.758l-9.152,9.634v30.826
                    c0,5.139-4.174,9.312-9.312,9.312c-5.137,0-9.311-4.174-9.311-9.312v-91.997c0-5.138,4.174-9.312,9.311-9.312
                    c5.139,0,9.312,4.174,9.312,9.312V161.995L1018.159,161.995z">
                </path>
            </g>
        </svg>
    </a>
    <div class="col-span-9"></div>
    <div class="col-span-2 flex items-stretch justify-between">
        <div class="grid grid-columns-12 w-full">
            <a href="#" class="group transition-fast col-span-3 flex items-center justify-center w-full hover:bg-blue">
                <i class="far text-2xl fa-compass text-blue group-hover:text-white"></i>
            </a>
            <a href="#" class="group transition-fast col-span-3 flex items-center justify-center w-full hover:bg-blue">
                <i class="far text-2xl fa-newspaper text-blue group-hover:text-white"></i>
            </a>
            <a href="#" class="group transition-fast col-span-3 flex items-center justify-center w-full hover:bg-blue">
                <i class="far text-2xl fa-calendar text-blue group-hover:text-white"></i>
            </a>
            <a href="#" class="group transition-fast col-span-3 flex items-center justify-center w-full hover:bg-blue">
                <i class="far text-2xl fa-user text-blue group-hover:text-white"></i>
            </a>
        </div>
    </div>
</div><!-- end logo container -->
<div class="flex flex-col">
    <div class="sym-w-left">
        <div class="bg-white min-h-screen pt-8 list-reset shadow">
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue menu-item">
                <i class="far fa-address-book text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Contacts</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-chart-bar text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Reports</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-hdd text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Assets Manager</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-life-ring text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Knowledge Base</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-gem text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Gemstone</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-user text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Manage Users</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-calendar-alt text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Events</span>
            </a>
            <a href="#" class="group flex items-center p-6 text-black transition-fast hover:bg-blue  menu-item">
                <i class="far fa-bookmark text-2xl mr-4 text-blue group-hover:text-white"></i>
                <span class="font-medium text-lg text-grey-darker group-hover:text-white">Favorites</span>
            </a>
        </div>
    </div>
</div>
</body>
</html>