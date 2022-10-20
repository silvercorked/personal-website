
@extends('layouts.layout')

@section('content')
    <div class="container px-5">
        <div class="row">
            <div class="col mt-5">
                <div class="row">
                    <div class="col-9 about">
                        <div class="row">
                            <div class="col">
                                <p class="h2">
                                    About Me
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    My name is Alex Wissing. I'm currently a student at the University
                                    of Nebraska at Omaha studying Computer Science and Computer Engineering.
                                    I will be graduating with my bachelors in Computer Engineering and Computer Science
                                    in December of 2022. In addition to those two degrees, I have a minor in Robotics, Women's
                                    and Gender Studies, and Mathematics.
                                </p>
                                <p>
                                    I'll be continuing my education at the University of Nebraska at Omaha
                                    in the Master's program in Computer Science. I ought to be able to graduate with my Master's
                                    in about 2024, presuming everything goes well.
                                </p>
                                <p>
                                    I'll list some projects I've worked on before. Some are private projects through my work at the
                                    <a
                                        target="_blank"
                                        class="text-decoration-none"
                                        href="https://www.unomaha.edu/college-of-information-science-and-technology/engagement/centers/center-for-management-information-technology/applied-it-projects/attic.php"
                                    >
                                        Attic
                                    </a>
                                    .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col img-slot" cols="3">
                        <img
                            class="img-fluid"
                            src="https://placekitten.com/g/800/800"
                            alt="Not actually a picture of Alex, but it's a picture of a cute cat."
                        >
                        </img>
                    </div>
                </div>
                <div class="row">
                    <div class="col developed-apps mt-4">
                        <div class="row">
                            <div class="col">
                                <p class="h3">
                                    Things I've Made or Helped Make
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a target="_blank" class="h5 text-decoration-none" href="https://partnership2020.org/">Partnership 2020</a>
                                <p>
                                    My co-worker, Gus, and I made this one. It was a request by the U.S. State Department
                                    to create a site that shows university partnerships between the United States and India. I did most of the map work and a large portion of the
                                    frontend, while Gus handled almost all of the backend and some frontend.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked">My Github</a>
                                <p>
                                    This contains many personal projects related to class and some just for fun.
                                </p>
                                <span class="h5">UNePlan Rewrite</span>
                                <p>
                                    My team at the Attic was responsible for rewriting the UNePlan software for UNeTech,
                                    an offshoot company of the University of Nebraska Medical Center. It's a strategic planning tool. We actually encapsulate
                                    a tree in the db. The backend is Django and the frontend is Vue 2.
                                </p>
                                <p>
                                    I can't show the actual repo/code, as it is now their product, but here's their <a target="_blank" class="text-decoration-none" href="https://www.unetech.org/portfolio/uneplan/">website</a>.
                                </p>
                                <span class="h5">Computer Engineering Capstone (
                                    <a
                                        target="_blank"
                                        class="text-decoration-none"
                                        href="https://github.com/silvercorked/OvalMate"
                                    >
                                        LPC5512 Custom Board Code
                                    </a>)(
                                    <a
                                        target="_blank"
                                        class="text-decoration-none"
                                        href="https://github.com/silvercorked/OvalMateUI"
                                    >
                                        Windows App (this repo is private)
                                    </a>)
                                </span>
                                <p>
                                    This project was really fun and challenging. We had to create a device that would take in information
                                    which would be used to fill in specifc ovals on an ES&S (Election Systems and Software) 11x8.5" ballot.
                                    The ballots would then be used for testing the physical election machines ES&S produce. Being test ballots,
                                    these essentially looked like a Scantron form.
                                </p>
                                <p>
                                    I mimicked this view in a .NET framework Windows app.
                                    The Windows app would then communicate over USB (using a custom written driver (included in the LPC5512 code))
                                    to a PCB designed by the team. The board needed to be programed to interact with a servo motor to move
                                    the pen up and down, 2 stepper motors to drive the arms of an XY-plotter, an IR sensor to attempt Localization,
                                    a 7-segment display for displaying Error Codes, and 5 buttons.
                                </p>
                                <p class="mb-0">
                                    I wrote all of the code in the 2 linked repos to accomplish this.
                                    The rest of the team worked on the other aspects, such as project management, designing and ordering the PCB and
                                    components, and designing power circuitry.
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://youtu.be/soO_XK59jR0">Video Demonstration</a>
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://youtu.be/gpEfLllFji8">Capstone Presentation</a>
                                </p>
                                <p>
                                    <a target="_blank" class="text-decoration-none" href="https://drive.google.com/file/d/1OdBfM5sa-d9HETcekw_Tbjh0S5ONHyS3/view?usp=sharing">Report</a>
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/Raytracer-CSCI4620">Raytracer</a>
                                <p>
                                    Alongside playing with 3DSMax, CSCI 4620 also had us create a raytracer which could parse .obj files
                                    and render an image of a scene. I worked with OpenCV to get this working. The professor programed
                                    in Java, but I got permission to practice some C++, so I wrote it in that.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/ImageProcessor-CSCI2620">Image Processor</a>
                                <p>
                                    Currently a work in progress. Takes in images and can apply basic transform, rotate, scale,
                                    send an image to greyscale, remove colors, convert an image into a histogram displaying frequency of
                                    color Value, and sooner or later, stegonography.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/bullet-game">Bullet Game</a>
                                <p>
                                    A game made in Browser using JS and a canvas element. It's sort of a bullet hell, but not
                                    very extensive.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/NFAtoDFAConverter">NFA to DFA</a>
                                <p>
                                    As part of my Theory of Computation class, I created an NFA (non-deterministic finite automata)
                                    to DFA (deterministic finite automata) converter. Since an NFA is basically just a vague DFA (some transitions
                                    to self are ignored) it can be converted to a DFA. In this project, I had just learned about
                                    Java's Collection's streams... so it's like 90% stream objects.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/GeneralizedDiceStatRollingComparitor">Dice Roll Comparitor</a>
                                <p>
                                    My friends often debated DND5e stat generation methods. So I just did all of them and calculated some stats on em.
                                    To be honest, this was a mistake. With multithreading (using my personal, and rather bad, thread management strategy),
                                    this took my poor laptop 18 straight hours to calculate. The output .csv file is 3 GB. I had to download a custom program
                                    to even read the file as excel just crashes. This project calculates all combinations of dice between d4, d6, d8, d10, d12,
                                    and d20 such that no dice type has more than 11 of itself in the set (ie, 2d4 + 10d6 + 3d8 would be
                                    tested, but 27d4 would not). That's about 12 million dice combinations (or at least that's how many rows were in the CSV).
                                    Shoulda checked how many combinations before running it, I think.
                                </p>
                                <p class="mb-0">
                                    Here are some other projects based around generating stats for DND concepts:
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://github.com/silvercorked/CardStatistics">DND5e Stats via Cards</a>
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://github.com/silvercorked/DamageGivenAChanceToHit">DND5e Damage calculator</a>
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://github.com/silvercorked/AdvantageDisAdvantageEstimator">Advantage Vs +modified</a>
                                </p>
                                <p class="mb-0">
                                    <a target="_blank" class="text-decoration-none" href="https://github.com/silvercorked/PointBuyVsRoll4D6DropLowest">Point Buy Vs Roll 4d6 drop lowest</a>
                                </p>
                                <p class="">
                                    <a target="_blank" class="text-decoration-none" href="https://github.com/silvercorked/ChanceOfRollingAtLeastOne16OnStats">Chance of rolling at least 1 16</a>
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/mathFunctionGraphingChaoticGraphs">Chaos Graphs</a>
                                <p>
                                    I've got a guilty pleasure. It's making graphs of mathematical chaos functions. Yeah, anyway here's a bunch of them.
                                </p>
                                <a target="_blank" class="h5 text-decoration-none" href="https://github.com/silvercorked/an-old-bad-game">My First Game</a>
                                <p>
                                    Made this in Highschool with a friend. It isn't very good and it's also very buggy, but you
                                    can walk around and collect coins and that's pretty cool.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
