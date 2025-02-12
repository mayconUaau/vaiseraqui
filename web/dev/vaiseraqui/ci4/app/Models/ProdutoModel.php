<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
   protected $DBGroup = 'default';
   protected $table = 'produto';
   protected $primaryKey = 'id';
   protected $returnType = 'object';
   protected $useSoftDeletes = true;
   protected $allowedFields = ['titulo', 'descricao', 'ordem', 'identificador', 'proximidades', 'video', 'ativo', 'validade', 'anuncianteFK', 'endereco', 'bairro', 'destaque', 'validadeDestaque', 'apresentacao', 'inicioValidade', 'inicioDestaque', 'cidadeFK', 'mapa', 'acomodacao', 'permitido', 'proibido', 'texto', 'itens', 'lazer', 'categoriaFK', 'arquivo', 'petfriendly', 'capacidadeFK', 'hospedes', 'limpeza', 'latitude', 'longitude', 'captadorFK', 'planoFK', 'calendario', 'preco', 'apartir', 'principaiscomodidades', 'itensdisponiveis', 'areautil', 'quartos', 'banheiros', 'vagas', 'andar', 'animais', 'mobilia', 'transporte', 'condominio', 'observacoes', 'pode', 'naopode', 'cardapio', 'eventosatendidos',  'coordenadas', 'regrascheck'];
   protected $useTimestamps = true;
   protected $createdField = 'dtCriacao';
   protected $updatedField = 'dtAlteracao';
   protected $deletedField = 'excluido';
   protected $validationRules = [
      'titulo' => 'required',
      'identificador' => 'is_unique[pavimento.identificador,id,{id}]'
   ];
   protected $validationMessages = [
      'titulo' => [
         'required' => 'Título obrigatório'
      ],
      'identificador' => [
         'is_unique' => 'Produto com o mesmo nome já cadastrado'
      ],
   ];
   protected $skipValidation = false;
}
