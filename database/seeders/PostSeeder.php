<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'content' => 'I really want to learn Norwegian!',
                'user_id' => 1,
                'topic_id' => 1002345,
                'created_on' => '2023-10-13 23:54:11'
            ],
            [
                'content' => 'prolly arabic... sounds cool',
                'user_id' => 3,
                'topic_id' => 1002345,
                'created_on' => '2023-10-13 23:54:12'
            ],
            [
                'content' => 'I really want to go to China!',
                'user_id' => 1,
                'topic_id' => 1002346,
                'created_on' => '2023-10-26 23:54:11'
            ],
            [
                'content' => 'prolly the most serene republic of san marino... sounds cool',
                'user_id' => 3,
                'topic_id' => 1002346,
                'created_on' => '2023-10-27 23:54:12'
            ],
            [
                'content' => 'Immersion is definitely the best way, but it takes time!',
                'user_id' => 2,
                'topic_id' => 1002347,
                'created_on' => '2023-11-02 10:22:34'
            ],
            [
                'content' => 'Agreed, but apps like Duolingo are good for quick practice.',
                'user_id' => 5,
                'topic_id' => 1002347,
                'created_on' => '2023-11-02 11:15:27'
            ],
            [
                'content' => 'I think it\’s all about consistency. Daily practice!',
                'user_id' => 8,
                'topic_id' => 1002347,
                'created_on' => '2023-11-03 12:10:19'
            ],
            [
                'content' => 'Definitely try Memrise, super fun and effective!',
                'user_id' => 3,
                'topic_id' => 1002348,
                'created_on' => '2023-11-07 09:30:21'
            ],
            [
                'content' => 'Anki is great for vocab retention!',
                'user_id' => 7,
                'topic_id' => 1002348,
                'created_on' => '2023-11-08 10:45:12'
            ],
            [
                'content' => 'I love using Babbel for learning on the go.',
                'user_id' => 4,
                'topic_id' => 1002348,
                'created_on' => '2023-11-09 11:55:33'
            ],
            [
                'content' => 'Paris is awesome for practicing French!',
                'user_id' => 6,
                'topic_id' => 1003456,
                'created_on' => '2023-12-11 09:10:45'
            ],
            [
                'content' => 'Spain is ideal for Spanish immersion, I love Madrid!',
                'user_id' => 9,
                'topic_id' => 1003456,
                'created_on' => '2023-12-11 10:25:30'
            ],
            [
                'content' => 'I heard Buenos Aires is great for Spanish learners!',
                'user_id' => 11,
                'topic_id' => 1003456,
                'created_on' => '2023-12-11 11:40:50'
            ],
            [
                'content' => 'Kanji is definitely challenging, but so rewarding!',
                'user_id' => 5,
                'topic_id' => 1004567,
                'created_on' => '2024-01-19 10:05:15'
            ],
            [
                'content' => 'I find it helpful to use mnemonics for memorizing Kanji.',
                'user_id' => 8,
                'topic_id' => 1004567,
                'created_on' => '2024-01-19 10:45:22'
            ],
            [
                'content' => 'Practice, practice, practice! Writing them out helps a lot.',
                'user_id' => 10,
                'topic_id' => 1004567,
                'created_on' => '2024-01-19 12:03:47'
            ],
            [
                'content' => 'Language exchange is a great way to keep up your skills!',
                'user_id' => 12,
                'topic_id' => 1005678,
                'created_on' => '2024-02-05 09:50:37'
            ],
            [
                'content' => 'I try to watch movies without subtitles. It really helps!',
                'user_id' => 7,
                'topic_id' => 1005678,
                'created_on' => '2024-02-05 10:20:19'
            ],
            [
                'content' => 'Podcasts are my go-to for maintaining proficiency!',
                'user_id' => 11,
                'topic_id' => 1005678,
                'created_on' => '2024-02-05 11:35:42'
            ],
            [
                'content' => 'Barcelona is amazing, but Granada is perfect for immersion!',
                'user_id' => 4,
                'topic_id' => 1006789,
                'created_on' => '2024-02-27 09:25:30'
            ],
            [
                'content' => 'Sevilla is a wonderful city to practice Spanish.',
                'user_id' => 9,
                'topic_id' => 1006789,
                'created_on' => '2024-02-27 10:55:45'
            ],
            [
                'content' => 'I\’ve always wanted to visit Salamanca for its rich history and language schools.',
                'user_id' => 10,
                'topic_id' => 1006789,
                'created_on' => '2024-02-27 11:40:17'
            ],
            [
                'content' => 'I use my languages in international meetings all the time!',
                'user_id' => 3,
                'topic_id' => 1007890,
                'created_on' => '2024-03-12 18:22:10'
            ],
            [
                'content' => 'Mandarin has been super useful for my business trips to China.',
                'user_id' => 8,
                'topic_id' => 1007890,
                'created_on' => '2024-03-12 18:22:10'
            ],
            [
                'content' => 'German has helped me immensely with negotiations in Europe.',
                'user_id' => 5,
                'topic_id' => 1007890,
                'created_on' => '2024-03-12 18:22:10'
            ],
            [
                'content' => 'It varies, but I\’d say about 2-3 years with consistent effort.',
                'user_id' => 6,
                'topic_id' => 1008901,
                'created_on' => '2024-04-03 19:31:45'
            ],
            [
                'content' => 'Depends on the language and how often you practice.',
                'user_id' => 10,
                'topic_id' => 1008901,
                'created_on' => '2024-04-03 19:31:45'
            ],
            [
                'content' => 'Fluency is subjective, but I\’d say focus on conversational skills first!',
                'user_id' => 12,
                'topic_id' => 1008901,
                'created_on' => '2024-04-03 19:31:45'
            ],
            [
                'content' => 'Mandarin is essential for business in Asia.',
                'user_id' => 11,
                'topic_id' => 1012345,
                'created_on' => '2024-04-17 20:15:55'
            ],
            [
                'content' => 'Learning Mandarin has opened so many doors for me in business.',
                'user_id' => 5,
                'topic_id' => 1012345,
                'created_on' => '2024-04-17 20:15:55'
            ],
            [
                'content' => 'I agree, especially in the tech industry.',
                'user_id' => 7,
                'topic_id' => 1012345,
                'created_on' => '2024-04-17 20:15:55'
            ],
            [
                'content' => 'Russian grammar can be tough, but it\’s so logical!',
                'user_id' => 4,
                'topic_id' => 1013456,
                'created_on' => '2024-05-03 21:25:10'
            ],
            [
                'content' => 'Cases are tricky, but once you get them, it\’s smooth sailing.',
                'user_id' => 8,
                'topic_id' => 1013456,
                'created_on' => '2024-05-03 21:25:10'
            ],
            [
                'content' => 'I\’ve been struggling with the aspect of verbs, any tips?',
                'user_id' => 12,
                'topic_id' => 1013456,
                'created_on' => '2024-05-03 21:25:10'
            ],
            [
                'content' => 'Writing Arabic script feels like an art form!',
                'user_id' => 2,
                'topic_id' => 1014567,
                'created_on' => '2024-05-20 22:34:26'
            ],
            [
                'content' => 'Start with the basics and then move on to more complex words.',
                'user_id' => 7,
                'topic_id' => 1014567,
                'created_on' => '2024-05-20 22:34:26'
            ],
            [
                'content' => 'I recommend practicing with a native speaker to perfect your script.',
                'user_id' => 10,
                'topic_id' => 1014567,
                'created_on' => '2024-05-20 22:34:26'
            ],
            [
                'content' => 'One at a time! Otherwise, it gets too confusing.',
                'user_id' => 3,
                'topic_id' => 1015678,
                'created_on' => '2024-06-02 10:12:34'
            ],
            [
                'content' => 'I juggle multiple languages, but it\’s challenging.',
                'user_id' => 9,
                'topic_id' => 1015678,
                'created_on' => '2024-06-02 10:12:34'
            ],
            [
                'content' => 'Focus on one until you\’re comfortable, then move on to the next!',
                'user_id' => 13,
                'topic_id' => 1015678,
                'created_on' => '2024-06-02 10:12:34'
            ],
            [
                'content' => 'Consistency is key for vocab retention.',
                'user_id' => 5,
                'topic_id' => 1016789,
                'created_on' => '2024-06-07 14:05:20'
            ],
            [
                'content' => 'I use flashcards daily. Anki is a lifesaver!',
                'user_id' => 7,
                'topic_id' => 1016789,
                'created_on' => '2024-06-07 14:05:20'
            ],
            [
                'content' => 'Try writing sentences with new words. It helps reinforce them.',
                'user_id' => 12,
                'topic_id' => 1016789,
                'created_on' => '2024-06-07 14:05:20'
            ],
            [
                'content' => 'Practice with native speakers is a must before going!',
                'user_id' => 6,
                'topic_id' => 1017890,
                'created_on' => '2024-06-17 09:45:12'
            ],
            [
                'content' => 'I\’ve been using language exchange apps like Tandem to prepare.',
                'user_id' => 8,
                'topic_id' => 1017890,
                'created_on' => '2024-06-17 09:45:12'
            ],
            [
                'content' => 'Immerse yourself in the culture even before you go. It helps a lot!',
                'user_id' => 10,
                'topic_id' => 1017890,
                'created_on' => '2024-06-17 09:45:12'
            ],
            [
                'content' => 'Don\’t stress too much about perfection. Just communicate!',
                'user_id' => 11,
                'topic_id' => 1018901,
                'created_on' => '2024-06-24 16:33:56'
            ],
            [
                'content' => 'It\’s okay to make mistakes. They\’re part of the learning process.',
                'user_id' => 4,
                'topic_id' => 1018901,
                'created_on' => '2024-06-24 16:33:56'
            ],
            [
                'content' => 'Focus on listening and speaking first, then tackle grammar.',
                'user_id' => 9,
                'topic_id' => 1018901,
                'created_on' => '2024-06-24 16:33:56'
            ],
            [
                'content' => 'Ti consiglio di praticare con madrelingua ogni giorno!',
                'user_id' => 3,
                'topic_id' => 1023456,
                'created_on' => '2024-07-01 12:14:45'
            ],
            [
                'content' => 'La chiave è non avere paura di sbagliare.',
                'user_id' => 7,
                'topic_id' => 1023456,
                'created_on' => '2024-07-01 12:14:45'
            ],
            [
                'content' => 'Io guardo i film italiani senza sottotitoli, è utile!',
                'user_id' => 10,
                'topic_id' => 1023456,
                'created_on' => '2024-07-01 12:14:45'
            ],
            [
                'content' => 'I learned a lot of English from watching Friends!',
                'user_id' => 2,
                'topic_id' => 1024567,
                'created_on' => '2024-07-07 18:55:30'
            ],
            [
                'content' => 'Same here! Watching shows really helps with listening skills.',
                'user_id' => 9,
                'topic_id' => 1024567,
                'created_on' => '2024-07-07 18:55:30'
            ],
            [
                'content' => 'I think subtitles are a must at first, then try without!',
                'user_id' => 13,
                'topic_id' => 1024567,
                'created_on' => '2024-07-07 18:55:30'
            ],
            [
                'content' => 'I recommend “Remembering the Kanji” for beginners.',
                'user_id' => 8,
                'topic_id' => 1026789,
                'created_on' => '2024-07-13 11:22:50'
            ],
            [
                'content' => 'Genki books are great for getting started with Japanese.',
                'user_id' => 11,
                'topic_id' => 1026789,
                'created_on' => '2024-07-13 11:22:50'
            ],
            [
                'content' => 'Make sure to practice writing out the kanji every day!',
                'user_id' => 5,
                'topic_id' => 1026789,
                'created_on' => '2024-07-13 11:22:50'
            ],
            [
                'content' => 'It\’s all about mastering the tones first.',
                'user_id' => 4,
                'topic_id' => 1027890,
                'created_on' => '2024-07-16 14:54:32'
            ],
            [
                'content' => 'Don\’t be afraid to exaggerate the tones when practicing.',
                'user_id' => 12,
                'topic_id' => 1027890,
                'created_on' => '2024-07-16 14:54:32'
            ],
            [
                'content' => 'I listen to Mandarin songs to get the tones right.',
                'user_id' => 6,
                'topic_id' => 1027890,
                'created_on' => '2024-07-16 14:54:32'
            ],
            [
                'content' => '¡Aprender español es una gran idea! Tiene tantas variantes.',
                'user_id' => 7,
                'topic_id' => 1031234,
                'created_on' => '2024-07-20 09:15:21'
            ],
            [
                'content' => 'Yo recomiendo empezar con el español latinoamericano, es más fácil.',
                'user_id' => 10,
                'topic_id' => 1031234,
                'created_on' => '2024-07-20 09:15:21'
            ],
            [
                'content' => 'Los modismos varían mucho entre países. ¡Es fascinante!',
                'user_id' => 9,
                'topic_id' => 1031234,
                'created_on' => '2024-07-20 09:15:21'
            ],
            [
                'content' => 'Le passé composé est un cauchemar pour moi!',
                'user_id' => 2,
                'topic_id' => 1032345,
                'created_on' => '2024-07-22 10:32:11'
            ],
            [
                'content' => 'La conjugaison des verbes en français est vraiment difficile.',
                'user_id' => 5,
                'topic_id' => 1032345,
                'created_on' => '2024-07-22 10:32:11'
            ],
            [
                'content' => 'Il est important de comprendre les règles dès le début.',
                'user_id' => 13,
                'topic_id' => 1032345,
                'created_on' => '2024-07-22 10:32:11'
            ],
            [
                'content' => 'Practice makes perfect, especially with kanji!',
                'user_id' => 8,
                'topic_id' => 1033456,
                'created_on' => '2024-07-24 11:45:56'
            ],
            [
                'content' => 'I find writing them out helps with memorization.',
                'user_id' => 11,
                'topic_id' => 1033456,
                'created_on' => '2024-07-24 11:45:56'
            ],
            [
                'content' => 'Kanji flashcards have been my best friend!',
                'user_id' => 6,
                'topic_id' => 1033456,
                'created_on' => '2024-07-24 11:45:56'
            ],
            [
                'content' => 'Portugal is amazing, but Brazil is where it\’s at for Portuguese!',
                'user_id' => 4,
                'topic_id' => 1034567,
                'created_on' => '2024-07-27 13:22:19'
            ],
            [
                'content' => 'Rio de Janeiro has some of the best language schools.',
                'user_id' => 9,
                'topic_id' => 1034567,
                'created_on' => '2024-07-27 13:22:19'
            ],
            [
                'content' => 'I loved my time in Lisbon. Such a beautiful city!',
                'user_id' => 7,
                'topic_id' => 1034567,
                'created_on' => '2024-07-27 13:22:19'
            ],
            [
                'content' => 'Japanese is tough, but totally worth it!',
                'user_id' => 3,
                'topic_id' => 1035678,
                'created_on' => '2024-07-30 14:05:38'
            ],
            [
                'content' => '私は日本語を学ぶのが大好きです！',
                'user_id' => 10,
                'topic_id' => 1035678,
                'created_on' => '2024-07-30 14:05:38'
            ],
            [
                'content' => 'The grammar can be tricky, but it gets easier with practice.',
                'user_id' => 13,
                'topic_id' => 1035678,
                'created_on' => '2024-07-30 14:05:38'
            ],
            [
                'content' => 'Writing Arabic script is so beautiful and intricate!',
                'user_id' => 11,
                'topic_id' => 1036789,
                'created_on' => '2024-08-01 15:15:50'
            ],
            [
                'content' => 'I practice by writing out entire paragraphs.',
                'user_id' => 6,
                'topic_id' => 1036789,
                'created_on' => '2024-08-01 15:15:50'
            ],
            [
                'content' => 'Start slow and build up your speed as you get more comfortable.',
                'user_id' => 5,
                'topic_id' => 1036789,
                'created_on' => '2024-08-01 15:15:50'
            ],
            [
                'content' => 'Tedesco è una lingua dura, ma molto utile.',
                'user_id' => 4,
                'topic_id' => 1037890,
                'created_on' => '2024-08-04 16:45:30'
            ],
            [
                'content' => 'Non mollare, la grammatica tedesca diventa più facile con la pratica.',
                'user_id' => 8,
                'topic_id' => 1037890,
                'created_on' => '2024-08-04 16:45:30'
            ],
            [
                'content' => 'La struttura delle frasi è complicata, ma ce la puoi fare!',
                'user_id' => 10,
                'topic_id' => 1037890,
                'created_on' => '2024-08-04 16:45:30'
            ],
            [
                'content' => 'Learning the basics of a language is always helpful!',
                'user_id' => 12,
                'topic_id' => 1038901,
                'created_on' => '2024-08-06 17:33:21'
            ],
            [
                'content' => 'It\’s definitely easier to connect with locals if you know the language.',
                'user_id' => 7,
                'topic_id' => 1038901,
                'created_on' => '2024-08-06 17:33:21'
            ],
            [
                'content' => 'Even a few phrases can make a huge difference in your travel experience.',
                'user_id' => 9,
                'topic_id' => 1038901,
                'created_on' => '2024-08-06 17:33:21'
            ],
            [
                'content' => 'Start with the basics and focus on daily conversation.',
                'user_id' => 13,
                'topic_id' => 1041234,
                'created_on' => '2024-08-08 18:22:44'
            ],
            [
                'content' => 'Korean dramas helped me a lot with listening skills.',
                'user_id' => 6,
                'topic_id' => 1041234,
                'created_on' => '2024-08-08 18:22:44'
            ],
            [
                'content' => 'Practice the Hangul alphabet until it\’s second nature.',
                'user_id' => 4,
                'topic_id' => 1041234,
                'created_on' => '2024-08-08 18:22:44'
            ],
            [
                'content' => 'Castilian Spanish is more formal than Latin American Spanish.',
                'user_id' => 3,
                'topic_id' => 1042345,
                'created_on' => '2024-08-10 19:05:55'
            ],
            [
                'content' => 'I prefer the Latin American accent, it\’s a bit softer.',
                'user_id' => 8,
                'topic_id' => 1042345,
                'created_on' => '2024-08-10 19:05:55'
            ],
            [
                'content' => 'The vocabulary can differ significantly between the two.',
                'user_id' => 11,
                'topic_id' => 1042345,
                'created_on' => '2024-08-10 19:05:55'
            ],
            [
                'content' => 'Adult learners need more motivation, but it\’s definitely possible!',
                'user_id' => 5,
                'topic_id' => 1043456,
                'created_on' => '2024-08-12 20:45:11'
            ],
            [
                'content' => 'I started learning Italian at 40, and it\’s been so rewarding.',
                'user_id' => 12,
                'topic_id' => 1043456,
                'created_on' => '2024-08-12 20:45:11'
            ],
            [
                'content' => 'Never too late to start! Just take it one step at a time.',
                'user_id' => 7,
                'topic_id' => 1043456,
                'created_on' => '2024-08-12 20:45:11'
            ]
        ]);
    }
}
