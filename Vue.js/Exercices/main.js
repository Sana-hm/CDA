// Additionneur
var app1 = new Vue({

    el: '#add',

    data: {

        num1: '',

        num2: '',

        sum:''
    }
});
// End Additionneur

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
    //End Nombre Magique

    // Calculatrice
    var app3 = new Vue({

        el: '#calcul',

        data: {

            operat: [
                '+', '-', '=', 'x', '/', '.'
            ],

            number1: '',

            number2: '',

            operator: '',

            resultat: 0,

            display: 0,
        },

        methods: {

            addNum: function(number) {

                this.display = number;

                switch (this.operator) {
                    case '+':
                        this.resultat += number;
                        break;
                    case '-':
                        this.resultat -= number;
                        break;
                    case '=':
                        this.display = this.resultat;
                        break;

                    default:
                        this.resultat = number;
                        break;
                 }
            },
        }


    });
   //End Calculatrice


