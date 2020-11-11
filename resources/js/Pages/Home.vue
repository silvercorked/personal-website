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
											blah blah
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
											blah blah
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
