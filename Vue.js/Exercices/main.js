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

            operator: '',

            number1: '',

            number2: '',

            operator: '',

            resultat: 0,

            display: 0
        },
        
        methods: {

            egal: function() {

                switch (this.operator) {
                    case '+':
                        this.resultat = this.number1 + this.number2;
                        this.display = this.resultat;
                        break;

                    case '-':
                        this.resultat = this.number1 - this.number2;
                        this.display = this.resultat;
                        break;

                    case '*':
                        this.resultat = this.number1 * this.number2;
                        this.display = this.resultat;
                        break;

                    case '/':
                        this.resultat = this.number1 / this.number2;
                        this.display = this.resultat;
                        break;

                    default:
                        break;
                 }
            },


            reset: function() {

                this.operator = null;
                this.number1 = '';
                this.number2 = '';
                this.resultat = '0';
                this.display = '0';

            },

            setOperator: function(op) {

                this.operator = op;
                this.display = this.operator;
            },

            addNum: function(number) {

                if (!this.operator) {

                    this.number1 += number; 

                    this.display = this.number1;
                    
                }else {

                    this.number2 += number;

                    this.display = this.number2;
                }              
            }
        }
    });
   //End Calculatrice


   //Interface
    var app4 = new Vue({

        el: '#color',

        data: {
            avtiveColor: 'black',
        }
    });

   //End Interface


