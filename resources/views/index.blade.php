<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset("style.css")}} ">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
		integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Modern House</title>
</head>

<body>
	<div class="wrapper" id="app">
		<main class="flex w-full">
			<aside class="w-[22.5%] border-r h-[100vh] overflow-auto">
				<div class="pt-2 px-2">
					<div class="w-full bg-white sticky pt-3 pb-3 top-0 border-b">
						<h2 class="text-center text-3xl mb-8">Color Palettes</h2>
						<div class="w-full flex justify-between items-center">
							<button class="color-navigation active first"><i class="fa-solid fa-circle-plus"></i> Generate color</button>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<button class="color-navigation second"><i class="fa-solid fa-palette"></i> Palettes</button>
						</div>
					</div>
					<div>
						<div class="flex flex-col items-center set-color">
							<div class="flex justify-center items-center relative mt-9 mb-5">
								<input type="color" class="my-color w-[15.5rem] h-[3rem] cursor-pointer opacity-0 absolute" name="color">
								<button class="flex justify-between items-center border-2 border-[#5b9aa0] rounded-lg px-3 py-2">
									<img src="{{asset("palette.png")}}" class="w-[30px]" alt="Palette">
									<span class="ml-2 text-lg text-[#5b9aa0]">Choose your own color</span>
								</button>
							</div>
							<div class="w-[15.5rem] h-[10rem] setting-color border rounded"></div>
							<button class="px-3 py-2 bg-[#5b9aa0] rounded-3xl text-white mt-4 submit">Submit</button>
						</div>
						<ul class="w-full hidden justify-between polette flex-wrap mt-5"></ul>
					</div>
				</div>
			</aside>
			<section class="w-[55%]">
				<header class="pt-7 border-b">
					<nav class="pb-5 px-3">
						<ul class="flex justify-between items-center">
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-sliders"></i> Set Pattern
								</button>
							</li>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-paint-roller"></i> Change color
								</button>
							</li>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-quote-left"></i> Add text
								</button>
							</li>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-copy"></i> Copy
								</button>
							</li>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-clipboard-list"></i> Insert
								</button>
							</li>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<li class="text-[17px]">
								<button class="toolbar-btns">
									<i class="mr-2 fa-solid fa-trash"></i> Delete
								</button>
							</li>
						</ul>
					</nav>
				</header>
				<div>
					<img src="{{asset("1.png")}}" alt="">
				</div>
			</section>
			<aside class="w-[22.5%] border-l h-[100vh] overflow-auto">
				<div class="pt-2 px-5">
					<div class="w-full bg-white sticky pt-3 pb-3 top-0 border-b">
						<h2 class="text-center text-3xl mb-8"><div>Equipments</div> <span class="text-xl">&</span> <span class="text-2xl">Patterns</span></h2>
						<div class="w-full flex justify-between relative items-center">
							<button class="ui-navigation active equip"><i class="fa-brands fa-mendeley"></i> Equipment <button class="chevron-down ml-3 text-black"><i class="fa-solid fa-chevron-down"></i></button></button>
							<span class="w-[1px] h-[20px] bg-[#d6d4e0]"></span>
							<button class="ui-navigation pattern"><i class="fa-solid fa-atom"></i> Pattern</button>
							<ul class="absolute category-list top-[-15rem] invisible opacity-0 flex flex-wrap justofy-between border px-[30px] py-[15px] rounded-[15px]">
								<li data-type="chair" class="categories cursor-pointer border rounded-[30px] px-3 py-[5px] mb-3">Chair</li>
								<li data-type="sofa" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Sofa</li>
								<li data-type="computer" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Computer</li>
								<li data-type="table" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Table</li>
								<li data-type="shelf" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Shelf</li>
								<li data-type="desk" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Desk</li>
								<li data-type="desktop" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Desktop</li>
								<li data-type="cup-board" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Cup board</li>
								<li data-type="arm-chair" class="categories cursor-pointer ml-3 border rounded-[30px] px-3 py-[5px] mb-3">Arm chair</li>
							</ul>
						</div>
					</div>
					<div>
						<ul class="equip-list w-full flex justify-between items-center flex-wrap pt-4">
						</ul>
						<ul class="w-full hidden justify-between pattern-list flex-wrap mt-5">
						</ul>
					</div>
				</div>
			</aside>
		</main>
	</div>

	<script type="text/javascript" src="{{asset("main.js")}}"></script>
</body>

</html>
