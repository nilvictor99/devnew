<?php

namespace Database\Seeders;

use App\Models\ToolType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToolTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultToolTypes = [
            ['name' => 'Editor de Código', 'slug' => 'editor-codigo', 'description' => 'Herramienta para edición de código fuente', 'is_active' => true],
            ['name' => 'Herramienta de Diseño', 'slug' => 'herramienta-diseño', 'description' => 'Herramienta utilizada para diseñar interfaces', 'is_active' => true],
            ['name' => 'Herramienta de Control de Versiones', 'slug' => 'herramienta-control-versiones', 'description' => 'Herramienta para el control de versiones de software', 'is_active' => true],
            ['name' => 'Herramienta de Gestión', 'slug' => 'herramienta-gestion', 'description' => 'Herramienta para la gestión de proyectos y tareas', 'is_active' => true],
            ['name' => 'Herramienta de Comunicación', 'slug' => 'herramienta-comunicacion', 'description' => 'Herramienta para la comunicación en equipo', 'is_active' => true],
            ['name' => 'Herramienta de Gestión de Bases de Datos', 'slug' => 'herramienta-gestion-bases-datos', 'description' => 'Herramienta para la gestión de bases de datos', 'is_active' => true],
        ];

        // Inserta los tipos predefinidos en la tabla 'tool_types'
        foreach ($defaultToolTypes as $toolType) {
            ToolType::create($toolType);
        }
    }
}
