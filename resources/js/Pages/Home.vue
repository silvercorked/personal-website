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
											I aim to graduate sometime around 2022 or 2023 depending on what I can sort
											out for master's degree opportunities.
										</p>
										<p>
											I have a lot of experience with web, at least web for smaller sites, because of
											my work with "The Attic," a small team in the third floor of the Peter Kiewit
											Institute that takes lower budget jobs that students can complete. I'll list some
											of those projects below, though some will be missing depending on the privacy
											requirements of the client
										</p>
										<p>
											I've created this website as both an excuse to get some experience with
											Laravel 8 and Laravel Jetstream as well as to have a space to post references to projects
											in a single space. I'll be improving it intermittently.
										</p>
									</b-col>
								</b-row>
							</b-col>
							<b-col class="img-slot" cols="4">
								<b-img src="https://placekitten.com/g/200/200" fluid-grow alt="Picture of Alex"></b-img>
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
											<b-link href="https://github.com/silvercorked">My Github</b-link>
											This generally has a lot of different random programs I've worked on. There's
											a spring app, some laravel, and decent bit of java. I've made a few large programs
											for approximating some different aspects of rolling dice. I've also got a little
											text-based game that generally works, as well as a game using Java Swing.
										</p>
										<p>
											<b-link href="https://partnership2020.org/">Partnership 2020</b-link>
											My co-worker, Gus, and I made this one. It was a request of the U.S. State department
											to create a site that shows the university partnerships between the United States and India. I did most of the map work and a large portion of the
											frontend, while Gus handled almost all of the backend and some frontend.
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
