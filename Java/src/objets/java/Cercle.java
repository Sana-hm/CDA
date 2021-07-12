package objets.java;

public class Cercle {

    public float rayon;

    public Cercle(int r){

        rayon = r;
    }

    public double calculSurface() {

    return (Math.PI * Math.pow(rayon,2) );
    }

    public double calculCirconference(){

        return (Math.PI * rayon * 2);
    }
}
