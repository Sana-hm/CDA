// Additionneur
var app1 = new Vue({

    el: '#add',

    data: {

        num1: '',

        num2: '',

        sum:''
    }
});

// Nombre Magique
let magic = parseInt(Math.random()*100);

var app2 = new Vue({
 
    el:'#app',

    data: {

        number: 0,

        message: 'Entrez un nombre!',

    },

    methods: {

        verify: function () {

            this.message = magic < this.number

                ? 'Plus petit'

                : (magic > this.number

                    ? 'Plus grand'

                    : 'BRAVO !!');

        },

        newNumber: function () {

            magic = parseInt(Math.random()*100);

            this.message = 'Entrez un nombre';

        }

    }

});
