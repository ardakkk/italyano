<template>
			<div class="slider-pizza__inner"> 
					<div v-for="pizza in pizzas" :key="pizza.id">
						<div class="pizza__wallpage">
							<img v-bind:src="'storage/' + pizza.imagePath" alt="pizza">
							<div class="buttons size">
								<button>26</button>
								<button>32</button>
							</div>
							<p class="price" data-price="1345">{{pizza.price}} тг.</p>
						</div>
						<div class="pizza__desc">
							<h4>{{pizza.title}}</h4>
							<p class="desc">{{pizza.description}}</p>
							<p class="consist">
								<span>Состав:</span>{{pizza.consist}}</p>
							<button class="choice__btn">Выбрать</button>
							<div class="count__pizza">
								<p>Количество</p>
								<input type="number" min="1" placeholder="1" value="1">
								<button class="count__submit pizza-btn"></button>
							</div>
						</div>
					</div>
				</div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
			pizzas: []
	};
  },
  created() {
		axios.get('/pizza').then(res => {
			this.pizzas = res.data;
		})
		.catch(e => console.log(e));
  },
  mounted() {
    console.log('Mounted');
  }
};
</script>
