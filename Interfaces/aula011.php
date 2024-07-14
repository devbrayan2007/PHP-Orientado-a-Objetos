<?php 


interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{

    public function create(){
        // lógica para criar uma notícia
    }

    public function read(){
        // lógica para ler uma notícia
    }

    public function update(){
        // lógica para atualizar uma notícia
    }

    public function delete(){
        // lógica para deletar uma notícia
        
    }
}