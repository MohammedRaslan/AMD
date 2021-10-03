<template>
    <div>
        <div class="done-shopping">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g transform="matrix(0.9500000000000002,0,0,0.9499999999999997,12.80000343322726,7.800000286102318)"><linearGradient xmlns="http://www.w3.org/2000/svg" id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="512" y2="0"><stop stop-opacity="1" stop-color="#00b59c" offset="0.06177606177606178"/><stop stop-opacity="1" stop-color="#00b59c" offset="0.07722007722007722"/><stop stop-opacity="1" stop-color="#e10956" offset="0.7722007722007722"/></linearGradient><linearGradient xmlns="http://www.w3.org/2000/svg" id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="301" x2="301" y1="271" y2="61"><stop offset="0" stop-color="#c3ffe8"/><stop offset=".9973" stop-color="#f0fff4"/></linearGradient><g xmlns="http://www.w3.org/2000/svg"><path d="m508.993 156.991c-2.833-3.772-7.276-5.991-11.993-5.991h-107.257c-7.163-42.511-44.227-75-88.743-75s-81.58 32.489-88.743 75h-93.235l-19.6-138.107c-1.049-7.396-7.38-12.893-14.851-12.893h-69.571c-8.284 0-15 6.716-15 15s6.716 15 15 15h56.55l19.599 138.104v.001.003l22.643 159.499c2.457 17.197 10.82 32.978 23.598 44.684-10.004 8.26-16.39 20.753-16.39 34.709 0 20.723 14.085 38.209 33.181 43.414-2.045 5.137-3.181 10.73-3.181 16.586 0 24.813 20.187 45 45 45s45-20.187 45-45c0-5.258-.915-10.305-2.58-15h125.16c-1.665 4.695-2.58 9.742-2.58 15 0 24.813 20.187 45 45 45s45-20.187 45-45-20.187-45-45-45h-240c-8.271 0-15-6.729-15-15s6.729-15 15-15h224.742c33.309 0 62.963-22.368 72.098-54.339l48.567-167.483c1.313-4.531.419-9.416-2.414-13.187z" fill="url(#SVGID_1_)" data-original="url(#SVGID_1_)" style=""/><g><g><path d="m301 61c-57.897 0-105 47.103-105 105s47.103 105 105 105 105-47.103 105-105-47.103-105-105-105zm40.606 100.607-45 45c-2.928 2.929-6.767 4.393-10.606 4.393s-7.678-1.464-10.606-4.394l-15-15c-5.858-5.858-5.858-15.355 0-21.213 5.857-5.858 15.355-5.858 21.213 0l4.394 4.393 34.394-34.393c5.857-5.858 15.355-5.858 21.213 0 5.857 5.859 5.857 15.356-.002 21.214z" fill="url(#SVGID_2_)" data-original="url(#SVGID_2_)" style=""/></g></g></g></g></svg> -->
            <div class="main-container">
                <div class="check-container">
                    <div class="check-background">
                        <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="check-shadow"></div>
                </div>
                <h2 class="text-offwhite"> Your order has been done sucessfuly</h2>
            </div>
        </div>
    </div>
</template>
<style lang="scss">

// Sample container
.main-container {
	width: 100%;
	height: 100vh;
	display: flex;
	flex-flow: column;
	justify-content: center;
	align-items: center;
}

// Main CSS
.check-container {
    width: 6.25rem;
    height: 7.5rem;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: space-between;

	.check-background {
		width: 100%;
		height: calc(100% - 1.25rem);
		background: linear-gradient(to bottom right, #7ac943, #7ac943);
		box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
		transform: scale(0.84);
		border-radius: 50%;
		animation: animateContainer 0.75s ease-out forwards 0.75s;
		display: flex;
		align-items: center;
		justify-content: center;
		opacity: 0;

		svg {
			width: 65%;
			transform: translateY(0.25rem);
			stroke-dasharray: 80;
			stroke-dashoffset: 80;
			animation: animateCheck 0.35s forwards 1.25s ease-out;
		}
	}

	.check-shadow {
		bottom: calc(-15% - 5px);
		left: 0;
		border-radius: 50%;
		background: radial-gradient(closest-side, #7ac943, transparent);
		animation: animateShadow 0.75s ease-out forwards 0.75s;
	}
}

@keyframes animateContainer {
	0% {
		opacity: 0;
		transform: scale(0);
		box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
	}
	25% {
		opacity: 1;
		transform: scale(0.9);
		box-shadow: 0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
	}
	43.75% {
		transform: scale(1.15);
		box-shadow: 0px 0px 0px 43.334px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 65px rgba(255, 255, 255, 0.25) inset;
	}
	62.5% {
		transform: scale(1);
		box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 21.667px rgba(255, 255, 255, 0.25) inset;
	}
	81.25% {
		box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset;
	}
	100% {
		opacity: 1;
		box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset,
			0px 0px 0px 0px rgba(255, 255, 255, 0.25) inset;
	}
}

@keyframes animateCheck {
	from {
		stroke-dashoffset: 80;
	}
	to {
		stroke-dashoffset: 0;
	}
}

@keyframes animateShadow {
	0% {
		opacity: 0;
		width: 100%;
		height: 15%;
	}
	25% {
		opacity: 0.25;
	}
	43.75% {
		width: 40%;
		height: 7%;
		opacity: 0.35;
	}
	100% {
		width: 85%;
		height: 15%;
		opacity: 0.25;
	}
}

</style>

