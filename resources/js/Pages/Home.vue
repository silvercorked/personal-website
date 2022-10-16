<template>
	<guest-layout>
		<template>
			<b-container>
				<b-row>
					<b-col class="mt-5">
						<b-row>
							<b-col class="about" cols="8">
								<b-row>
									<b-col>
										<p class="h2">
											About Me
										</p>
									</b-col>
								</b-row>
								<b-row>
									<b-col>
										<p>
											My name is Alex Wissing. I'm currently a student at the University
											of Nebraska at Omaha studying Computer Science and Computer Engineering.
											I with be graduating with my bachlors in Computer Engineering and Computer Science
                                            in December of 2022. I'll be continuing my education at the University of Nebraska at Omaha
                                            in the Master's program for Computer Science. I ought to be able to graduate with my Master's
                                            in about 2024, presuming everything goes well.
										</p>
										<p>
											I'll list some projects I've worked on before. Some are private projects through my work at the
                                            <a
                                                href="https://www.unomaha.edu/college-of-information-science-and-technology/engagement/centers/center-for-management-information-technology/applied-it-projects/attic.php"
                                            >
                                                Attic
                                            </a>
                                            .
										</p>
									</b-col>
								</b-row>
							</b-col>
							<b-col class="img-slot" cols="4">
								<b-img src="https://placekitten.com/g/200/200" fluid-grow alt="Not actually a picture of Alex, but it's a picture of a cute cat."></b-img>
							</b-col>
						</b-row>
						<b-row>
							<b-col class="developed-apps mt-4">
								<b-row>
									<b-col>
										<p class="h3">
											Things I've Made or Helped Make
										</p>
									</b-col>
								</b-row>
								<b-row>
									<b-col>
                                        <p>
											<b-link href="https://partnership2020.org/">Partnership 2020</b-link>
											My co-worker, Gus, and I made this one. It was a request of the U.S. State department
											to create a site that shows the university partnerships between the United States and India. I did most of the map work and a large portion of the
											frontend, while Gus handled almost all of the backend and some frontend.
										</p>
										<p>
											<b-link href="https://github.com/silvercorked">My Github</b-link>
											My Github.
										</p>
                                        <p>
                                            <b-link href="https://www.unetech.org/portfolio/uneplan/">UNePlan Rewrite</b-link>
                                            My team at the Attic was responsible for rewriting the UNePlan software for UNeTech,
                                            an offshoot company of UNMC. It's a strategic planning tool. We actually encapsulate
                                            a tree in the db. The backend is python django and the frontend is vue 2. I can't show
                                            the actual repo/code but here's their website. I've worked personally with Stephen Hug,
                                            the business advisor listed on the linked site.
                                        </p>
                                        <p>
                                            Computer Engineering Capstone
                                            <b-link href="https://github.com/silvercorked/OvalMate">LPC5512 Custom Board Code</b-link>
                                            <b-link href="https://github.com/silvercorked/OvalMateUI">Windows App (this repo is private)</b-link>
                                            This project was really fun and challenging. We had to create a device that would take in information
                                            which would be used to fill in specifc ovals on an ES&S (Election Systems and Software) 11x8.5" ballot.
                                            The ballots would then be used for testing the physical election machines ES&S produces. Being test ballots,
                                            these essentially looked like a Scantron form. I mimicked this view in a .NET framework Windows app.
                                            The Windows app would then communicate over USB (using a custom written driver (included in the LPC5512 code))
                                            to a PCB designed by the team. The board needed to be programmed to interact with a servo motor to move
                                            the pen up and down, 2 stepper motors to drive the arms of an XY-plotter, an IR sensor to attempt Localization,
                                            a 7-segment display for displaying Error Codes, and 5 buttons. I wrote all of the code in the 2 repos above to accomplish this.
                                            The rest of the team worked on the other aspects, such as project management, designing and ordering the PCB and
                                            components, and designing power circuitry.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/Raytracer-CSCI4620">Raytracer</b-link>
                                            Alongside playing with 3DSMax, CSCI 4620 also had us create a raytracer which could parse .obj files
                                            and render an image of a scene. I worked with OpenCV to get this working. The professor programmed
                                            in Java, but I got permission to practice some C++, so I wrote it in that.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/ImageProcessor-CSCI2620">Image Processor</b-link>
                                            Currently a work in progress. Takes in images and can apply basic transform, rotate, scale,
                                            send an image to greyscale, remove colors, convert an image into a histogram displaying frequency of
                                            color Value, and sooner or later, stegonography.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/bullet-game">Bullet Game</b-link>
                                            A game made in Browser using JS and a canvas element. It's sort of a bullet hell, but not
                                            very extensive.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/NFAtoDFAConverter">NFA to DFA</b-link>
                                            As part of my Theory of Computation class, I created an NFA (non-deterministic finite automata)
                                            to DFA (deterministic finite automata) converter. Since an NFA is basically just a vague DFA (some transitions
                                            to self are ignored) it can be converted to a DFA. In this project, I had just learned about
                                            Java's Collection's streams... so it's like 90% stream objects.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/GeneralizedDiceStatRollingComparitor">Dice Roll Comparitor</b-link>
                                            My friends often debated DND5e stat generation methods. So I just did all of them and calcualted some stats on em.
                                            To be honest, this was a mistake. With multithreading (using my personal, and rather bad, thread management strategy),
                                            this took my poor laptop 18 straight hours to calculate. The output .csv file is 3 GB. I had to download a custom program
                                            to even read the file as excel just crashes. This project calculates all combinations of dice between d4, d6, d8, d10, d12,
                                            and d20 such that no dice type has more than 11 of itself in the set (ie, 2d4 + 10d6 + 3d8 would be
                                            tested, but 27d4 would not). That's about 12 million dice combinations (or at least that's how many rows were in the CSV).
                                            Shoulda checked how many combinations before running it I think.
                                            Here are some other projects based around generating stats for DND concepts:
                                            <b-link href="https://github.com/silvercorked/CardStatistics">DND5e Stats via Cards</b-link>
                                            <b-link href="https://github.com/silvercorked/DamageGivenAChanceToHit">DND5e Damage calculator</b-link>
                                            <b-link href="https://github.com/silvercorked/AdvantageDisAdvantageEstimator">Advantage Vs +modified</b-link>
                                            <b-link href="https://github.com/silvercorked/PointBuyVsRoll4D6DropLowest">Point Buy Vs Roll 4d6 drop lowest</b-link>
                                            <b-link href="https://github.com/silvercorked/ChanceOfRollingAtLeastOne16OnStats">Chance of rolling at least 1 16</b-link>
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/mathFunctionGraphingChaoticGraphs">Chaos Graphs</b-link>
                                            I've got a guilty pleasure. It's making graphs of mathematical chaos functions. Yeah, anyway here's a bunch of them.
                                        </p>
                                        <p>
                                            <b-link href="https://github.com/silvercorked/an-old-bad-game">My First Game</b-link>
                                            Made this in Highschool with a friend. It isn't very good and it's also very buggy, but you
                                            can walk around and collect coins and that's pretty cool.
                                        </p>
									</b-col>
								</b-row>
							</b-col>
						</b-row>
					</b-col>
				</b-row>
			</b-container>
		</template>
	</guest-layout>
</template>

<script>
	import GuestLayout from '../Layouts/GuestLayout';
    export default {
		name: 'Home',
		components: {
			'guest-layout': GuestLayout
		}
    }
</script>
