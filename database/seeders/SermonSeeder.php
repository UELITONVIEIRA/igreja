<?php

namespace Database\Seeders;

use App\Models\Sermon;
use Illuminate\Database\Seeder;

class SermonSeeder extends Seeder
{
    public function run(): void
    {
        $sermons = [
            [
                'title' => 'Construindo sobre a Rocha',
                'preacher' => 'Pr. Michael Davis',
                'series' => 'Fundamentos',
                'description' => 'Uma reflexão profunda sobre a importância de bases sólidas em nossa jornada cristã.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAaudWh3tKW2HOJizXztaN-TrXCVKKhYE2OSbqtupz9bw7rjsQm3fe7IiJkUrEvpXpWmf0S5qtcy_sRPBZqma7lPWrHiPXkvWrZ-zcndm3Qaec9s2kVdHLko_I9m6Xq5WvB6WXw3YB-55xRKW4IaP9jRE1Xk8bWlJWONegCJHsfl74nWWDIV99IwvfymT1XRLSaFqwY3H449q-VFZmHNbAtjZF31wftlLx73o0IUEc39kAi_OSEh4-rCYXfagdf43p7v5S5FZHBzIaw',
                'video_url' => '#',
                'duration' => '42:15',
                'preached_at' => '2023-10-24',
            ],
            [
                'title' => 'O Poder da Comunidade',
                'preacher' => 'Dra. Sarah Jenkins',
                'series' => 'Palestrante Convidado',
                'description' => 'Como o apoio mútuo e a vida em corpo transformam nossa realidade espiritual.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBJHSAOLynvXfhoMguzZBrBG8Zs7lxRxpDrqt8thVe2y26qutLNOgV9RoV1YOAwrXDhiUi-wKs2yP7ewAFX88Sc7RY0K4iZz64cyWEJUftP-BC2o6K5Wgbxomv3iiilMmGBTuJOWRq8H_eIhVMyO3bEGjp_2_l_XuuWL0XF1v2yOzhb9oJ4Ues2C_42GCtjtwONsxdaJtaCRrld1VF5bxkkzDiD09pH1XUqMed6jMW0m4GitfuecOwbecSgwcOnQ_nn_vd89pXSo-ID',
                'video_url' => '#',
                'duration' => '38:50',
                'preached_at' => '2023-10-17',
            ],
            [
                'title' => 'Geração Imparável',
                'preacher' => 'Rev. Mark Thompson',
                'series' => 'Noite de Jovens',
                'description' => 'Despertando o chamado para uma vida de propósito e impacto na sociedade.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-HB3uktKx4JtSyDBNpmLDhe0qqjdoqe0kgfrORG4ALulnFXi98xAfSuERBLYBvneXDMYmlpO03UkthG3bXDefj3V7yBrcXSyXOfTRYIk7uP3KtPT-hdK4zzzjcDt6bD1JNXXSJKFE6hoj_jKH22vzE70_RMviV2orVRrXlWIT2Z8wX2I-9gtlUK_9urOuIhgMGTPY8AfmCGUnMITMrbrDv4w-pXZLu3rhFjrf4mUPcxSbjxwOJc3yEFk2adp0ulUUK4QL06pKzo-K',
                'video_url' => '#',
                'duration' => '55:20',
                'preached_at' => '2023-10-10',
            ],
            [
                'title' => 'Caminhando em Fé: A Coragem de Crer',
                'preacher' => 'Pr. Michael Davis',
                'series' => 'Hebreus 11',
                'description' => 'Junte-se a nós enquanto exploramos as profundezas de Hebreus 11, desafiando-nos a sair da nossa zona de conforto.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDd26st43Un9Ei4ezemTjGM-PhgaFR1KrtCqkKwgV7Fwuiwp90IX7_OJoMBBHA27c0UdHyOuXYA2CLltyCL00_7WnmybL8G5u1FZAajvlHoWo3uNN2uPl8y125ZRDqnkOsHvbRa4XHaiytC-uTfNo9_dHapHYaYmHfPnr6zWOBCD91-cu3gL1FyTBMCXo_O3OMjPnVsTutfBI6NH-pSMqQQGnwtUfoOVifDahcp_EhHZkXZBGfTBkaDKgggWQARlh1c1ukNuscclkie',
                'video_url' => '#',
                'duration' => '45:30',
                'preached_at' => '2023-11-05',
            ],
            [
                'title' => 'Graça Que Transforma',
                'preacher' => 'Pra. Ana Oliveira',
                'series' => 'Fundamentos',
                'description' => 'Descobrindo como a graça de Deus não apenas nos salva, mas nos transforma diariamente.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAaudWh3tKW2HOJizXztaN-TrXCVKKhYE2OSbqtupz9bw7rjsQm3fe7IiJkUrEvpXpWmf0S5qtcy_sRPBZqma7lPWrHiPXkvWrZ-zcndm3Qaec9s2kVdHLko_I9m6Xq5WvB6WXw3YB-55xRKW4IaP9jRE1Xk8bWlJWONegCJHsfl74nWWDIV99IwvfymT1XRLSaFqwY3H449q-VFZmHNbAtjZF31wftlLx73o0IUEc39kAi_OSEh4-rCYXfagdf43p7v5S5FZHBzIaw',
                'video_url' => '#',
                'duration' => '40:10',
                'preached_at' => '2023-11-12',
            ],
            [
                'title' => 'O Chamado à Adoração',
                'preacher' => 'Rev. Mark Thompson',
                'series' => 'Salmos',
                'description' => 'Uma jornada pelos Salmos revelando o coração da verdadeira adoração.',
                'thumbnail_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBJHSAOLynvXfhoMguzZBrBG8Zs7lxRxpDrqt8thVe2y26qutLNOgV9RoV1YOAwrXDhiUi-wKs2yP7ewAFX88Sc7RY0K4iZz64cyWEJUftP-BC2o6K5Wgbxomv3iiilMmGBTuJOWRq8H_eIhVMyO3bEGjp_2_l_XuuWL0XF1v2yOzhb9oJ4Ues2C_42GCtjtwONsxdaJtaCRrld1VF5bxkkzDiD09pH1XUqMed6jMW0m4GitfuecOwbecSgwcOnQ_nn_vd89pXSo-ID',
                'video_url' => '#',
                'duration' => '35:45',
                'preached_at' => '2023-11-19',
            ],
        ];

        foreach ($sermons as $sermon) {
            Sermon::create($sermon);
        }
    }
}
