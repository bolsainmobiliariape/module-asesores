<?php
// config for Bolsainmobiliariape/ModuleAsesores
return [
	"asesores" => [
		"fields" => [
	        "name",
	        "email",
	        "phone",
	        "whatsapp",
	        "picture"
	    ],

	    "names" =>  [
	        "name" => "Nombre",
	        "email" => "Email",
	        "phone" => "Telefono",
	        "whatsapp" => "Whatsapp",
	        "picture" => "Portada"
	    ],

	    "migrations" => [
	        "name" => ["string"],
	        "email" => ["string"],
	        "phone" => ["string"],
	        "whatsapp" => ["string"],
	        "picture" => ["text"]
	    ],

	    "rules" => [
	        "asesor.name" => ["required", "string", "max:191"],
	        "asesor.email" => ["required", "email"],
	        "asesor.phone" => ["required", "string", "max:191"],
	        "asesor.whatsapp" => ["required", "string", "max:191"],
	        "picture" => ["image", "sometimes", "nullable"]
	    ],
	],

	"applicants" => [
		"fields" => [
	        "name",
	        "email",
	        "phone",
	        "message",
	    ],

	    "names" =>  [
	        "name" => "Nombre",
	        "email" => "Email",
	        "phone" => "Telefono",
	        "message" => "message",
	    ],

	    "migrations" => [
	        "name" => ["string"],
	        "email" => ["string"],
	        "phone" => ["string"],
	        "message" => ["string"],
	    ],

	    "rules" => [
	        "applicant.name" => ["required", "string", "max:191"],
	        "applicant.email" => ["required", "email"],
	        "applicant.phone" => ["required", "string", "max:191"],
	        "applicant.message" => ["required", "string", "max:191"],
	    ],
	],
];
