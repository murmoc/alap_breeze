class TesztKerdesek{
    constructor(node, adat){
        this.node = node;
        this.adat = adat;
        //this.tesztId = adat.id;
        this.tesztkerdes = this.node.children(".kerdes");
        this.tesztv1 = this.node.children(".v1");
        this.tesztv2 = this.node.children(".v2");
        this.tesztv3 = this.node.children(".v3");
        this.tesztv4 = this.node.children(".v4");
        this.teszthelyes = this.node.children(".helyes");
        this.tesztKategoria = this.node.children(".kategoria");
        this.setAdat(this.adat)

        this.tesztSzinvalt = this.node.children(".v1");
        
        this.tesztSzinvalt.on("click ", () => {
            this.szinvalt(this.adat);
        });
        
    }

    setAdat(adat){
        this.adat = adat;
        this.tesztkerdes.html(adat.kerdes);
        this.tesztv1.html(adat.v1);
        this.tesztv2.html(adat.v2);
        this.tesztv3.html(adat.v3);
        this.tesztv4.html(adat.v4);
        this.teszthelyes.html(adat.helyes);
        this.tesztKategoria.html(adat.kategoria);
    }
    szinvalt(adat) {
        /* let esemeny = new CustomEvent("valasz", {
            detail: this.adat,
        });

        window.dispatchEvent(esemeny); */

        const btn = document.getElementById('v1');

        btn.addEventListener('click', function onClick() {
        btn.style.backgroundColor = 'green';
        btn.style.color = 'white';
    });
    }
    
}