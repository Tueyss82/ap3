<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table            = 'message'; 
    protected $primaryKey       = 'IDMESSAGE'; 
    protected $useAutoIncrement = true; 
    protected $returnType       = 'array'; 
    protected $useSoftDeletes   = false; 
    protected $protectFields    = true;     protected $allowedFields    = ['IDCOMMUNE', 'ETAT', 'TEXTE', 'COULEUR', 'TAILLE']; 

    protected bool $allowEmptyInserts = false; 
    protected bool $updateOnlyChanged = true; 

    protected array $casts = [
        'IDCOMMUNE' => 'integer', 
        'ETAT'      => 'string',
        'TEXTE'     => 'string',
        'COULEUR'   => 'string',
        'TAILLE'    => 'string'
    ];

    // Dates
    protected $useTimestamps = false; 
    protected $dateFormat    = 'datetime'; 
    protected $createdField  = 'created_at'; 
    protected $updatedField  = 'updated_at'; 
    protected $deletedField  = 'deleted_at'; 

    // Validation
    protected $validationRules      = [
        'IDCOMMUNE' => 'required|integer', // L'ID Commune est obligatoire
        'ETAT'      => 'required|string|max_length[100]', // L'état est obligatoire
        'TEXTE'     => 'required|string|max_length[255]', 
        'COULEUR'   => 'required|string|max_length[20]',  
        'TAILLE'    => 'required|string|max_length[20]'   
    ];

    protected $validationMessages   = [
        'IDCOMMUNE' => [
            'required' => 'Le champ ID Commune est requis.',
            'integer'  => 'Le champ ID Commune doit être un entier.'
        ],
        'ETAT' => [
            'required' => 'Le champ État est requis.',
            'string'   => 'Le champ État doit être une chaîne de caractères.',
            'max_length' => 'Le champ État ne peut pas dépasser 100 caractères.'
        ],
        'TEXTE' => [
            'required' => 'Le champ Texte est requis.',
            'string'   => 'Le champ Texte doit être une chaîne de caractères.',
            'max_length' => 'Le champ Texte ne peut pas dépasser 255 caractères.'
        ],
        'COULEUR' => [
            'required' => 'Le champ Couleur est requis.',
            'string'   => 'Le champ Couleur doit être une chaîne de caractères.',
            'max_length' => 'Le champ Couleur ne peut pas dépasser 20 caractères.'
        ],
        'TAILLE' => [
            'required' => 'Le champ Taille est requis.',
            'string'   => 'Le champ Taille doit être une chaîne de caractères.',
            'max_length' => 'Le champ Taille ne peut pas dépasser 20 caractères.'
        ]
    ];

    protected $skipValidation       = false; 
    protected $cleanValidationRules = true;  

    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
