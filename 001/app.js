function rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}


// const mas = [...Array(10)].map(_ => rand(7, 77));

const mas = [];

// mas[0] = 'Petras';
// mas[1] = 'Ieva';

// mas.push('Bebras');

// mas.unshift('Kurmis');

for (let i = 0; i < 10; i++) {
    mas.push(rand(7, 77));
}

// const cats = ['Murka', 'Pilkis', 'Rainius'];

console.log(mas);


// for (let i = 0; i < 10; i++) {
//     console.log(6);
// }

mas.forEach(n => console.log(n));