<?php

/**
 * 
 * Template Name: Residential Landing Page
 * 
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo the_title(); ?> - Residential </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/template.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>


<?php
    get_header();
    ?>


<!-- 
    <header>
        <div class="container mx-auto px-4 md:px-2 lg:px-0 py-4 grid grid-cols-2 md:grid-cols-4">
            <div>
                <img class="h-20 w-full" src="https://1electricien.ca/wp-content/uploads/2024/01/groupedmn.png"
                    alt="logo">
            </div>

            <div>
                <h1 class="font-semibold text-sm md:text-base py-2">Licensed Electricians Toronto & GTA</h1>
                <p class="text-blue-800">24/7 Emergency services</p>
            </div>

            <div>
                <h1 class="font-semibold text-sm md:text-base py-2">ESA License: #8978787</h1>
            </div>

            <div>
                <h1 class="font-semibold text-sm md:text-base py-2">Call: 9898989899</h1>
                <p class="p-2 px-4 text-blue-800 text-sm inline-block rounded bg-slate-100">1 Electrician Available
                    Today:
                    April, 29/2024</p>
            </div>

        </div>

        <div class="w-full bg-blue-800">
            <div class="container mx-auto px-4 md:px-2 lg:px-0 py-4 text-white flex overflow-x-auto">
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Home</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Residential</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Commercial</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Security System</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Service Area</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Contact Us</a>
                <a href="#" class="text-sm md:text-base uppercase p-4 hover:bg-blue-700">Blog</a>
            </div>
        </div>
    </header> -->



    <!-- hero section  -->
    <section class="w-full h-min-screen h-full bg-cover bg-no-repeat"
        style="background-image: url('https://ontime-electric.ca/wp-content/uploads/2023/02/Electrician-Toronto.jpg.webp')">
        <div class="h-full w-full relative bg-gradient-to-r from-black/50 to-transparent">
            <div class="bg-black/30 h-full w-full absolute top-0 left-0 right-0 z-10">

            </div>
            <div class="container mx-auto px-4 md:px-2 lg:px-0 h-full flex justify-start items-center">
                <div class="w-full h-full my-8 py-8 grid gap-8 grid-cols-1 md:grid-cols-2 z-20">

                    <div class="w-full text-slate-50 flex flex-col justify-center items-center">
                        <div class="w-full">
                            <div class="w-full my-4 pb-4">
                                <h1 class="text-4xl font-bold">
                                    Expert Residential Electrical Services in Montreal with Group DMN
                                </h1>
                                <p class="my-2 font-bold text-4xl text-blue-800"><a
                                        href="tel:416-882-6000">416-882-6000</a></p>
                            </div>
                            <div class="w-full ">
                                <div
                                    class="p-4 my-4 bg-blue-500/30 text-white shadow-xl rounded-tl-full rounded-br-full uppercase flex">
                                    <span class="w-14 pl-4"><i class="fa-solid fa-star"></i> </span>
                                    <span>Expertise </span>
                                </div>
                                <div
                                    class="p-4 my-4 bg-blue-500/30 text-white shadow-xl rounded-tl-full rounded-br-full uppercase flex">
                                    <span class="w-14 pl-4"><i class="fa-solid fa-star"></i> </span>
                                    <span>Reliability</span>
                                </div>
                                <div
                                    class="p-4 my-4 bg-blue-500/30 text-white shadow-xl rounded-tl-full rounded-br-full uppercase flex">
                                    <span class="w-14 pl-4"><i class="fa-solid fa-star"></i> </span>
                                    <span>Safety</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full text-center flex flex-col justify-center items-center">
                        <div class="w-full mx-auto lg:w-96 bg-white p-4">
                            <h1 class="text-2xl font-bold uppercase">
                                Contact Us
                            </h1>
                            <p class="my-2 text-sm">Experience reliable, efficient, and expert residential electrical
                                services with us now. Contact Group DMN today to schedule a consultation or service
                                appointment. Your satisfaction and safety are our top priorities.
                            </p>

                            <form class="w-full p-4" action="" method="post">
                                <input class="w-full mb-4 p-4 py-2 outline-none border-b border-b-blue-500" type="text"
                                    placeholder="Full Name*">
                                <input class="w-full mb-4 p-4 py-2 outline-none border-b border-b-blue-500" type="email"
                                    placeholder="Email*">
                                <input class="w-full mb-4 p-4 py-2 outline-none border-b border-b-blue-500" type="tel"
                                    placeholder="Phone Number*">
                                <input class="w-full mb-4 p-4 py-2 outline-none border-b border-b-blue-500" type="text"
                                    placeholder="Your Address">
                                <input class="w-full mb-4 p-4 py-2 outline-none border-b border-b-blue-500" type="text"
                                    placeholder="Describe your issue">

                                <div class="w-full my-4">
                                    <button type="submit" class="p-4 w-full bg-blue-800 text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <section class="my-8 py-8">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <div class="w-full mb-8">
                <h1 class="text-center font-semibold text-xl">Electrical Contractor in Toronto Area, York Region, Peel
                    Region, Durham Region</h1>
                <h2 class="my-4 text-center font-bold text-4xl">24/7 LICENSED ELECTRICIANS TORONTO & GTA</h2>
            </div>

            <div class="w-full flex flex-col lg:flex-row gap-8">
                <div class="w-full lg:w-4/6 p-4">
                    <figure class="w-full">
                        <img class="w-full h-96" src="https://via.placeholder.com/600x240" alt="">
                    </figure>
                    <p class="py-4">
                        At Group DMN, we're committed to enhancing the safety, efficiency, and functionality of your
                        home through a comprehensive range of residential electrical services. Whether you need 24-hour
                        emergency assistance, panel replacements, or electrical upgrades, our dedicated team is here to
                        address all your residential electrical needs with precision and care.
                    </p>


                </div>
                <div class="w-full lg:w-2/6">
                    <div class="w-full p-4 py-8 bg-gray-50 ">
                        <h2
                            class="my-8 py-4 px-2 uppercase text-center text-2xl font-bold border-t-2 border-t-blue-500 border-b-2 border-b-blue-500">
                            Why Choose Group DMN?</h2>

                        <div class="w-full my-8">
                            <u class="list-none no-underline">
                                <li class="my-4 list-item">
                                    <h1 class="py-4 font-semibold text-base"><i
                                            class="fa-solid fa-shield-halved mx-4 p-2 bg-blue-500/10 rounded"></i>
                                        Expertise</h1>

                                    <p class="text-sm pl-4">
                                        With years of experience under our belt, our skilled team delivers precise
                                        solutions for all your electrical requirements. Whether it's analyzing
                                        electrical inputs or optimizing control centers, we excel in every aspect of
                                        commercial electrical services.
                                    </p>
                                </li>
                                <li class="my-4 list-item">
                                    <h1 class="py-4 font-semibold text-base"> <i
                                            class="fa-solid fa-key mx-4 p-2 bg-blue-500/10 rounded"></i>
                                        Reliability</h1>
                                    <p class="text-sm pl-4">
                                        Quality is our priority. We use only the finest materials and equipment to
                                        ensure lasting results that you can rely on. When you choose Group DMN, you're
                                        choosing excellence and reliability.

                                    </p>
                                </li>
                                <li class="my-4 list-item">
                                    <h1 class="py-4 font-semibold text-base">
                                        <i class="fa-solid fa-money-bill-1-wave mx-4 p-2 bg-blue-500/10 rounded"></i>
                                        Safety
                                    </h1>
                                    <p class="text-sm pl-4">
                                        Your safety is non-negotiable. That's why our electricians undergo rigorous
                                        training and adhere to strict safety standards on every project. Plus, we
                                        conduct thorough background checks for added peace of mind.

                                    </p>
                                </li>
                            </u>
                        </div>

                        <a class="w-full my-4 text-center block bg-blue-800 hover:bg-blue-700 text-white p-4"
                            href="#">Ready to make a reservation? Click here to schedule an appointment now!</a>
                    </div>
                </div>
            </div>
        </div>

    </section>




    <section class="my-8 py-8 bg-gray-50">

        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <div class="w-full pb-4 mb-8">
                <h1 class="my-4 text-center font-bold text-4xl">Our Residential Electrical Services</h1>
            </div>

            <div class="w-full flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/3">
                    <!-- Vertical Tab Container -->
                    <div class="flex flex-col">
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white text-white  hover:bg-blue-900 focus:outline-none focus:bg-blue-900 bg-blue-800">
                            24/7 Emergency Service
                        </button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">New
                            Construction Wiring</button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">Electrical
                            Modernization</button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">Convector
                            Heating Installation</button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">Panel
                            Upgrades and Repairs</button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">Electrical
                            Inspections</button>
                        <button
                            class="w-full mb-2 rounded tab-btn py-4 px-6 font-bold hover:text-white focus:text-white bg-blue-50 hover:bg-blue-900 focus:outline-none focus:bg-blue-900">Generator
                            Installation</button>
                    </div>
                </div>

                <!-- Content for the tabs -->
                <div class="w-full bg-white p-4 rounded" id="tab-content">
                    <div class="tab-pane">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">24/7 Emergency Service</h1>
                        <p> Electrical emergencies can happen at any time, which is why we offer round-the-clock
                            emergency assistance to ensure your safety and peace of mind.
                        </p>
                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>
                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">New Construction Wiring</h1>
                        <p>
                            Building a new home? Our expert electricians can handle all aspects of new construction
                            wiring, ensuring your electrical system is installed correctly from the ground up.
                        </p>

                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>

                    </div>
                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">Electrical Modernization</h1>
                        <p>
                            If your home's electrical system is outdated or inefficient, our team can modernize it to
                            meet current safety and efficiency standards, saving you money on energy bills in the long
                            run.
                        </p>
                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>
                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">Convector Heating Installation</h1>
                        <p>
                            We specialize in installing electric heating systems with electronic thermostats for sheds,
                            spas, and swimming pools, providing you with reliable warmth and comfort.
                        </p>
                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>
                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">Panel Upgrades and Repairs</h1>
                        <p>
                            From replacing old fuse panels with circuit breaker panels to increasing electrical input
                            capacity, we have the expertise to upgrade and repair your home's electrical panels
                            efficiently and safely.
                        </p>
                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>
                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">Electrical Inspections</h1>
                        <p>
                            Our thorough electrical inspections for insurance purposes ensure your home meets the
                            highest safety standards, giving you peace of mind and potentially lowering your insurance
                            premiums.
                        </p>

                        <a class="w-full mt-4 text-center block shadow-xl rounded bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>

                    <div class="tab-pane hidden">
                        <h1 class="text-xl font-semibold text-blue-800 my-4">Generator Installation</h1>
                        <p>
                            We offer installation services for generators up to 26 kW, providing you with backup power
                            during outages and emergencies.
                        </p>

                        <a class="w-full mt-4 text-center block shadow-xl rounded-3xl bg-blue-800 hover:bg-blue-700 text-white p-2"
                            href="tel:498-989-2898">
                            <i class="fa-solid fa-phone px-2"></i> Call Now: 498-989-2898 </a>
                    </div>
                    <!-- Add more content as needed -->
                </div>
            </div>

        </div>
    </section>


    <section class="my-8 py-8 bg-blue-50">
        <div class="container mx-auto px-4 md:px-2 lg:px-0 flex gap-8 justify-around items-center flex-wrap">
            <div class="w-96 h-40 rounded-xl bg-white shadow-xl p-4 flex justify-center items-center text-center">
                <div class="w-full">
                    <span class="text-green-500 p-2 text-xl"><i class="fa-solid fa-circle"></i></span>
                    <span class="text-2xl font-semibold">
                        AVAILABLE
                    </span>
                    <p>We Have 1 Electricians Available</p>
                </div>
            </div>

            <div class="w-96 h-40 rounded-xl bg-white shadow-xl p-4 flex justify-center items-center text-center">
                <div class="w-full">
                    <span class="text-green-500 p-2 text-xl"><i class="fa-solid fa-medal"></i></span>
                    <span class="text-2xl font-semibold"> BEST of AWARD
                    </span>
                    <br>
                    <p> WINNER 2020</p>
                </div>
            </div>

            <div class="w-80 flex flex-col justify-around">
                <a class="w-full my-4 text-center block shadow-xl rounded bg-blue-800 hover:bg-blue-700 text-white p-4"
                    href="tel:498-989-2898">
                    <i class="fa-solid fa-phone px-2"></i> CALL NOW <br> 498-989-2898 </a>
                <a class="w-full my-4 text-center block shadow-xl rounded bg-blue-800 hover:bg-blue-700 text-white p-4"
                    href="#">
                    <i class="fa-solid fa-phone px-2"></i>BOOK SERVICE ONLINE </a>
            </div>
        </div>
    </section>


    <!-- carousel  -->
    <section class="my-8 py-8 ">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <div class="py-4 text-center">
                <h2 class="py-4 px-2 uppercase text-2xl font-bold">
                    REVIEWS BY OUR CUSTOMERS</h2>
            </div>

            <div class="my-8 owl-carousel owl-theme">
                <div class="item p-4 bg-gray-50 shadow-lg rounded">
                    <p class="py-4">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam labore provident possimus
                        laudantium harum ex autem. Molestiae sunt dolor error voluptatem sequi a. Culpa, iusto
                        consequatur nobis laboriosam quisquam ipsa?</p>
                    <h3 class="font-semibold my-2"> <i class="fa-solid fa-circle-user"></i> Saeed karimi</h3>
                </div>
                <div class="item p-4 bg-gray-50 shadow-lg rounded">
                    <p class="py-4">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam labore provident possimus
                        laudantium harum ex autem. Molestiae sunt dolor error voluptatem sequi a. Culpa, iusto
                        consequatur nobis laboriosam quisquam ipsa?</p>
                    <h3 class="font-semibold my-2"> <i class="fa-solid fa-circle-user"></i> Saeed karimi</h3>
                </div>
                <div class="item p-4 bg-gray-50 shadow-lg rounded">
                    <p class="py-4">
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                        <i class="fa-solid fa-star text-yellow-500"></i>
                    </p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam labore provident possimus
                        laudantium harum ex autem. Molestiae sunt dolor error voluptatem sequi a. Culpa, iusto
                        consequatur nobis laboriosam quisquam ipsa?</p>
                    <h3 class="font-semibold my-2"> <i class="fa-solid fa-circle-user"></i> Saeed karimi</h3>
                </div>
            </div>
        </div>
    </section>


    <section class="my-8 py-8">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <h2 class="mb-4 pb-8 text-center font-bold text-4xl">Our Services</h2>
            <div class="w-full my-4 py-4 grid grid-cols-1 md:grid-cols-3  gap-8">
                <!-- Service 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="py-4 text-center">
                            <i class="fa-solid fa-clock text-4xl text-blue-800 mb-4"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">24/7 Emergency Support</h3>
                        <p class="text-gray-700"> Electrical emergencies can happen at any time. That's why we offer
                            round-the-clock emergency support to keep your business up and running, day or night.
                        </p>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="py-4 text-center">
                            <i class="fas fa-mobile-alt text-4xl text-blue-800 mb-4"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Expert Electrical Solutions:</h3>
                        <p class="text-gray-700">From managing distribution panels to installing lighting systems, our
                            expertise covers a wide range of electrical solutions tailored specifically for commercial
                            spaces.
                        </p>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="py-4 text-center">
                            <i class="fa-solid fa-lightbulb text-4xl text-blue-800 mb-4"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Energy-Efficient Lighting</h3>
                        <p class="text-gray-700"> We specialize in energy-efficient lighting solutions for both indoor
                            and outdoor areas. From street lighting to lampposts, we ensure optimal illumination while
                            minimizing energy consumption.
                        </p>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="py-4 text-center">
                            <i class="fa-solid fa-screwdriver-wrench text-4xl text-blue-800 mb-4"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Generator Installation</h3>
                        <p class="text-gray-700"> Need backup power? We offer professional generator installation
                            services customized to suit your business requirements, providing peace of mind during power
                            outages.
                        </p>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="px-6 py-4">
                        <div class="py-4 text-center">
                            <i class="fa-solid fa-plug-circle-check text-4xl text-blue-800 mb-4"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Comprehensive Maintenance</h3>
                        <p class="text-gray-700">Our services don't end with installation. We provide comprehensive
                            maintenance for all your electrical systems, ensuring they remain in top condition
                            year-round.

                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- service area  -->
    <section class="my-8 py-8">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <div class="my-4 py-4">
                <h1 class="py-4 px-2 uppercase text-center text-4xl font-bold">SERVICE AREA</h1>
            </div>

            <div class="w-full grid gap-8 grid-cols-1 md:grid-cols-2">

                <div class="w-full p-2 md:p-8 flex justify-center items-center">
                    <figure class="w-full">
                        <img class="w-full" src="https://via.placeholder.com/400x200" alt="">
                    </figure>
                </div>

                <div class="w-full p-2 md:p-8">
                    <h3 class="py-4 px-2 text-xl font-semibold">Don't let electrical issues hold your business back.
                        Choose Group DMN for reliable, efficient, and expert commercial electrical services.</h3>

                    <div class="flex gap-4 flex-wrap">
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Aurora
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Aurora
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                        <div class="p-2 px-4 bg-blue-500/10 hover:bg-blue-800 hover:text-white text-blue rounded-lg">
                            <i class="fa-solid fa-location-dot"></i> Toronto
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- faq  -->
    <section class="my-8 py-8">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">
            <div class="my-4 py-4">
                <h1 class="py-4 px-2 uppercase text-center text-4xl font-bold">FAQ</h1>
            </div>

            <div class="accordion">

                <div class="accordion-item border-b">
                    <!-- Accordion item header -->
                    <div class="accordion-title">
                        <button
                            class="flex justify-between w-full rounded px-8 py-4 text-xl md:text-2xl font-semibold bg-gray-100">
                            <p><i class="fa-solid fa-circle-question text-blue-800 p-2"></i> Are you available for
                                emergency electrical services in Toronto?</p>
                            <!-- Arrow icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 12.586l4.293-4.293a1 1 0 011.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 12.586z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!-- Accordion item content -->
                    <div class="accordion-content hidden p-8 text-xl bg-gray-50">
                        <p>
                            You will receive a quote same-day, onsite! Once one of our available electricians arrives on
                            the scene, for either a residential or commercial case, the ensuing quote is immediate.
                        </p>

                    </div>
                </div>


                <div class="accordion-item border-b">
                    <!-- Accordion item header -->
                    <div class="accordion-title">
                        <button
                            class="flex justify-between w-full rounded px-8 py-4 text-xl md:text-2xl font-semibold bg-gray-100">
                            <p><i class="fa-solid fa-circle-question text-blue-800 p-2"></i> What should I look for when
                                hiring an electrical contractor in Toronto?</p>
                            <!-- Arrow icon -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 12.586l4.293-4.293a1 1 0 011.414 1.414l-5 5a1 1 0 01-1.414 0l-5-5a1 1 0 111.414-1.414L10 12.586z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <!-- Accordion item content -->
                    <div class="accordion-content hidden p-8 text-xl bg-gray-50">
                        <p class="mb-4">
                            You should look for the following key points when hiring an electrical contractor in
                            Toronto. First and foremost, you'll want to make sure that they are ESA/ECRA licensed and
                            WSIB insured. This will protect you in case of any accidents, injuries, or damage that may
                            occur during the course of the work.
                        </p>
                        <p class="mb-4">

                            Secondly, you'll want to check that they have licensed electricians and registered
                            apprentices on staff. This will ensure that the work is up to code and meets all safety
                            standards. Finally, you'll want to verify that the contractor is locally reputed and
                            provides detailed quotations. By considering these factors, you can be sure that you're
                            hiring the best possible electrical contractor for the job.

                        </p>
                    </div>
                </div>


            </div>

        </div>
    </section>


    <!-- recent blogs  -->
    <section class="my-8 py-8 bg-gray-50">
        <div class="container mx-auto px-4 md:px-2 lg:px-0">

            <div class="my-4 py-4">
                <h1 class="py-4 px-2 uppercase text-center text-4xl font-bold">RECENT Blogs and news</h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://ontime-electric.ca/wp-content/uploads/2021/06/Mississauga-Commercial-Electrician-768x511.jpg"
                        alt="Placeholder Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 text-blue-800"><a href="#">Cost of Electrical Renovations
                                in 2023</a></h2>
                        <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="text-blue-800">Continue Reading...</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://ontime-electric.ca/wp-content/uploads/2021/08/Fuse-Box-To-Circuit-Breaker-Replacement-1-768x432.jpg.webp"
                        alt="Placeholder Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 text-blue-800"><a href="#">Fuses vs. Circuit Breakers:
                                What’s the Difference?</a></h2>
                        <p class="pb-4">In a home’s electrical system there. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.</p>
                        <a href="#" class="text-blue-800">Continue Reading...</a>

                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Placeholder Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 text-blue-800"><a href="#">How Much Does it Cost to
                                Install Pot Lights in 2023?</a></h2>
                        <p class="pb-4">Average Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="text-blue-800">Continue Reading...</a>

                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="https://ontime-electric.ca/wp-content/uploads/2015/04/Basement-Potlights-Installation-Project-Toronto-768x512.jpg"
                        alt="Placeholder Image" class="w-full">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2 text-blue-800"><a href="#">Card 4</a></h2>
                        <p class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="text-blue-800">Continue Reading...</a>

                    </div>
                </div>

                <!-- Add more cards as needed -->

            </div>
        </div>
    </section>



    
    <?php
    get_footer();
    ?>


    <!-- Include jQuery (required by Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>

        $(document).ready(function () {

            $('.tab-btn').click(function () {
                var index = $(this).index();
                $('.tab-btn').removeClass('bg-blue-800 text-white');
                $('.tab-btn').addClass('bg-blue-50');
                $(this).addClass('bg-blue-800').fadeIn(500);
                $('.tab-pane').hide(500);
                $('.tab-pane').eq(index).show(500);
            });


            $('.accordion-title button').click(function () {
                $(this).parent().next('.accordion-content').toggle(500);
            });
        });


        // Initialize Owl Carousel
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>