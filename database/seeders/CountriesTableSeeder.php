<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            [
                'code' => 'ad',
                'country_name' => 'Andorra',
                'icon_name' => 'https://flagcdn.com/ad.svg',
            ],
            [
                'code' => 'ae',
                'country_name' => 'United Arab Emirates',
                'icon_name' => 'https://flagcdn.com/ae.svg',
            ],
            [
                'code' => 'af',
                'country_name' => 'Afghanistan',
                'icon_name' => 'https://flagcdn.com/af.svg',
            ],
            [
                'code' => 'ag',
                'country_name' => 'Antigua and Barbuda',
                'icon_name' => 'https://flagcdn.com/ag.svg',
            ],
            [
                'code' => 'ai',
                'country_name' => 'Anguilla',
                'icon_name' => 'https://flagcdn.com/ai.svg',
            ],
            [
                'code' => 'al',
                'country_name' => 'Albania',
                'icon_name' => 'https://flagcdn.com/al.svg',
            ],
            [
                'code' => 'am',
                'country_name' => 'Armenia',
                'icon_name' => 'https://flagcdn.com/am.svg',
            ],
            [
                'code' => 'ao',
                'country_name' => 'Angola',
                'icon_name' => 'https://flagcdn.com/ao.svg',
            ],
            [
                'code' => 'aq',
                'country_name' => 'Antarctica',
                'icon_name' => 'https://flagcdn.com/aq.svg',
            ],
            [
                'code' => 'ar',
                'country_name' => 'Argentina',
                'icon_name' => 'https://flagcdn.com/ar.svg',
            ],
            [
                'code' => 'as',
                'country_name' => 'American Samoa',
                'icon_name' => 'https://flagcdn.com/as.svg',
            ],
            [
                'code' => 'at',
                'country_name' => 'Austria',
                'icon_name' => 'https://flagcdn.com/at.svg',
            ],
            [
                'code' => 'au',
                'country_name' => 'Australia',
                'icon_name' => 'https://flagcdn.com/au.svg',
            ],
            [
                'code' => 'aw',
                'country_name' => 'Aruba',
                'icon_name' => 'https://flagcdn.com/aw.svg',
            ],
            [
                'code' => 'ax',
                'country_name' => 'Åland Islands',
                'icon_name' => 'https://flagcdn.com/ax.svg',
            ],
            [
                'code' => 'az',
                'country_name' => 'Azerbaijan',
                'icon_name' => 'https://flagcdn.com/az.svg',
            ],
            [
                'code' => 'ba',
                'country_name' => 'Bosnia and Herzegovina',
                'icon_name' => 'https://flagcdn.com/ba.svg',
            ],
            [
                'code' => 'bb',
                'country_name' => 'Barbados',
                'icon_name' => 'https://flagcdn.com/bb.svg',
            ],
            [
                'code' => 'bd',
                'country_name' => 'Bangladesh',
                'icon_name' => 'https://flagcdn.com/bd.svg',
            ],
            [
                'code' => 'be',
                'country_name' => 'Belgium',
                'icon_name' => 'https://flagcdn.com/be.svg',
            ],
            [
                'code' => 'bf',
                'country_name' => 'Burkina Faso',
                'icon_name' => 'https://flagcdn.com/bf.svg',
            ],
            [
                'code' => 'bg',
                'country_name' => 'Bulgaria',
                'icon_name' => 'https://flagcdn.com/bg.svg',
            ],
            [
                'code' => 'bh',
                'country_name' => 'Bahrain',
                'icon_name' => 'https://flagcdn.com/bh.svg',
            ],
            [
                'code' => 'bi',
                'country_name' => 'Burundi',
                'icon_name' => 'https://flagcdn.com/bi.svg',
            ],
            [
                'code' => 'bj',
                'country_name' => 'Benin',
                'icon_name' => 'https://flagcdn.com/bj.svg',
            ],
            [
                'code' => 'bl',
                'country_name' => 'Saint Barthélemy',
                'icon_name' => 'https://flagcdn.com/bl.svg',
            ],
            [
                'code' => 'bm',
                'country_name' => 'Bermuda',
                'icon_name' => 'https://flagcdn.com/bm.svg',
            ],
            [
                'code' => 'bn',
                'country_name' => 'Brunei',
                'icon_name' => 'https://flagcdn.com/bn.svg',
            ],
            [
                'code' => 'bo',
                'country_name' => 'Bolivia',
                'icon_name' => 'https://flagcdn.com/bo.svg',
            ],
            [
                'code' => 'bq',
                'country_name' => 'Caribbean Netherlands',
                'icon_name' => 'https://flagcdn.com/bq.svg',
            ],
            [
                'code' => 'br',
                'country_name' => 'Brazil',
                'icon_name' => 'https://flagcdn.com/br.svg',
            ],
            [
                'code' => 'bs',
                'country_name' => 'Bahamas',
                'icon_name' => 'https://flagcdn.com/bs.svg',
            ],
            [
                'code' => 'bt',
                'country_name' => 'Bhutan',
                'icon_name' => 'https://flagcdn.com/bt.svg',
            ],
            [
                'code' => 'bv',
                'country_name' => 'Bouvet Island',
                'icon_name' => 'https://flagcdn.com/bv.svg',
            ],
            [
                'code' => 'bw',
                'country_name' => 'Botswana',
                'icon_name' => 'https://flagcdn.com/bw.svg',
            ],
            [
                'code' => 'by',
                'country_name' => 'Belarus',
                'icon_name' => 'https://flagcdn.com/by.svg',
            ],
            [
                'code' => 'bz',
                'country_name' => 'Belize',
                'icon_name' => 'https://flagcdn.com/bz.svg',
            ],
            [
                'code' => 'ca',
                'country_name' => 'Canada',
                'icon_name' => 'https://flagcdn.com/ca.svg',
            ],
            [
                'code' => 'cc',
                'country_name' => 'Cocos (Keeling) Islands',
                'icon_name' => 'https://flagcdn.com/cc.svg',
            ],
            [
                'code' => 'cd',
                'country_name' => 'DR Congo',
                'icon_name' => 'https://flagcdn.com/cd.svg',
            ],
            [
                'code' => 'cf',
                'country_name' => 'Central African Republic',
                'icon_name' => 'https://flagcdn.com/cf.svg',
            ],
            [
                'code' => 'cg',
                'country_name' => 'Republic of the Congo',
                'icon_name' => 'https://flagcdn.com/cg.svg',
            ],
            [
                'code' => 'ch',
                'country_name' => 'Switzerland',
                'icon_name' => 'https://flagcdn.com/ch.svg',
            ],
            [
                'code' => 'ci',
                'country_name' => 'Côte d\'Ivoire (Ivory Coast)',
                'icon_name' => 'https://flagcdn.com/ci.svg',
            ],
            [
                'code' => 'ck',
                'country_name' => 'Cook Islands',
                'icon_name' => 'https://flagcdn.com/ck.svg',
            ],
            [
                'code' => 'cl',
                'country_name' => 'Chile',
                'icon_name' => 'https://flagcdn.com/cl.svg',
            ],
            [
                'code' => 'cm',
                'country_name' => 'Cameroon',
                'icon_name' => 'https://flagcdn.com/cm.svg',
            ],
            [
                'code' => 'cn',
                'country_name' => 'China',
                'icon_name' => 'https://flagcdn.com/cn.svg',
            ],
            [
                'code' => 'co',
                'country_name' => 'Colombia',
                'icon_name' => 'https://flagcdn.com/co.svg',
            ],
            [
                'code' => 'cr',
                'country_name' => 'Costa Rica',
                'icon_name' => 'https://flagcdn.com/cr.svg',
            ],
            [
                'code' => 'cu',
                'country_name' => 'Cuba',
                'icon_name' => 'https://flagcdn.com/cu.svg',
            ],
            [
                'code' => 'cv',
                'country_name' => 'Cape Verde',
                'icon_name' => 'https://flagcdn.com/cv.svg',
            ],
            [
                'code' => 'cw',
                'country_name' => 'Curaçao',
                'icon_name' => 'https://flagcdn.com/cw.svg',
            ],
            [
                'code' => 'cx',
                'country_name' => 'Christmas Island',
                'icon_name' => 'https://flagcdn.com/cx.svg',
            ],
            [
                'code' => 'cy',
                'country_name' => 'Cyprus',
                'icon_name' => 'https://flagcdn.com/cy.svg',
            ],
            [
                'code' => 'cz',
                'country_name' => 'Czechia',
                'icon_name' => 'https://flagcdn.com/cz.svg',
            ],
            [
                'code' => 'de',
                'country_name' => 'Germany',
                'icon_name' => 'https://flagcdn.com/de.svg',
            ],
            [
                'code' => 'dj',
                'country_name' => 'Djibouti',
                'icon_name' => 'https://flagcdn.com/dj.svg',
            ],
            [
                'code' => 'dk',
                'country_name' => 'Denmark',
                'icon_name' => 'https://flagcdn.com/dk.svg',
            ],
            [
                'code' => 'dm',
                'country_name' => 'Dominica',
                'icon_name' => 'https://flagcdn.com/dm.svg',
            ],
            [
                'code' => 'do',
                'country_name' => 'Dominican Republic',
                'icon_name' => 'https://flagcdn.com/do.svg',
            ],
            [
                'code' => 'dz',
                'country_name' => 'Algeria',
                'icon_name' => 'https://flagcdn.com/dz.svg',
            ],
            [
                'code' => 'ec',
                'country_name' => 'Ecuador',
                'icon_name' => 'https://flagcdn.com/ec.svg',
            ],
            [
                'code' => 'ee',
                'country_name' => 'Estonia',
                'icon_name' => 'https://flagcdn.com/ee.svg',
            ],
            [
                'code' => 'eg',
                'country_name' => 'Egypt',
                'icon_name' => 'https://flagcdn.com/eg.svg',
            ],
            [
                'code' => 'eh',
                'country_name' => 'Western Sahara',
                'icon_name' => 'https://flagcdn.com/eh.svg',
            ],
            [
                'code' => 'er',
                'country_name' => 'Eritrea',
                'icon_name' => 'https://flagcdn.com/er.svg',
            ],
            [
                'code' => 'es',
                'country_name' => 'Spain',
                'icon_name' => 'https://flagcdn.com/es.svg',
            ],
            [
                'code' => 'et',
                'country_name' => 'Ethiopia',
                'icon_name' => 'https://flagcdn.com/et.svg',
            ],
            [
                'code' => 'eu',
                'country_name' => 'European Union',
                'icon_name' => 'https://flagcdn.com/eu.svg',
            ],
            [
                'code' => 'fi',
                'country_name' => 'Finland',
                'icon_name' => 'https://flagcdn.com/fi.svg',
            ],
            [
                'code' => 'fj',
                'country_name' => 'Fiji',
                'icon_name' => 'https://flagcdn.com/fj.svg',
            ],
            [
                'code' => 'fk',
                'country_name' => 'Falkland Islands',
                'icon_name' => 'https://flagcdn.com/fk.svg',
            ],
            [
                'code' => 'fm',
                'country_name' => 'Micronesia',
                'icon_name' => 'https://flagcdn.com/fm.svg',
            ],
            [
                'code' => 'fo',
                'country_name' => 'Faroe Islands',
                'icon_name' => 'https://flagcdn.com/fo.svg',
            ],
            [
                'code' => 'fr',
                'country_name' => 'France',
                'icon_name' => 'https://flagcdn.com/fr.svg',
            ],
            [
                'code' => 'ga',
                'country_name' => 'Gabon',
                'icon_name' => 'https://flagcdn.com/ga.svg',
            ],
            [
                'code' => 'gb',
                'country_name' => 'United Kingdom',
                'icon_name' => 'https://flagcdn.com/gb.svg',
            ],
            [
                'code' => 'gb-eng',
                'country_name' => 'England',
                'icon_name' => 'https://flagcdn.com/gb-eng.svg',
            ],
            [
                'code' => 'gb-nir',
                'country_name' => 'Northern Ireland',
                'icon_name' => 'https://flagcdn.com/gb-nir.svg',
            ],
            [
                'code' => 'gb-sct',
                'country_name' => 'Scotland',
                'icon_name' => 'https://flagcdn.com/gb-sct.svg',
            ],
            [
                'code' => 'gb-wls',
                'country_name' => 'Wales',
                'icon_name' => 'https://flagcdn.com/gb-wls.svg',
            ],
            [
                'code' => 'gd',
                'country_name' => 'Grenada',
                'icon_name' => 'https://flagcdn.com/gd.svg',
            ],
            [
                'code' => 'ge',
                'country_name' => 'Georgia',
                'icon_name' => 'https://flagcdn.com/ge.svg',
            ],
            [
                'code' => 'gf',
                'country_name' => 'French Guiana',
                'icon_name' => 'https://flagcdn.com/gf.svg',
            ],
            [
                'code' => 'gg',
                'country_name' => 'Guernsey',
                'icon_name' => 'https://flagcdn.com/gg.svg',
            ],
            [
                'code' => 'gh',
                'country_name' => 'Ghana',
                'icon_name' => 'https://flagcdn.com/gh.svg',
            ],
            [
                'code' => 'gi',
                'country_name' => 'Gibraltar',
                'icon_name' => 'https://flagcdn.com/gi.svg',
            ],
            [
                'code' => 'gl',
                'country_name' => 'Greenland',
                'icon_name' => 'https://flagcdn.com/gl.svg',
            ],
            [
                'code' => 'gm',
                'country_name' => 'Gambia',
                'icon_name' => 'https://flagcdn.com/gm.svg',
            ],
            [
                'code' => 'gn',
                'country_name' => 'Guinea',
                'icon_name' => 'https://flagcdn.com/gn.svg',
            ],
            [
                'code' => 'gp',
                'country_name' => 'Guadeloupe',
                'icon_name' => 'https://flagcdn.com/gp.svg',
            ],
            [
                'code' => 'gq',
                'country_name' => 'Equatorial Guinea',
                'icon_name' => 'https://flagcdn.com/gq.svg',
            ],
            [
                'code' => 'gr',
                'country_name' => 'Greece',
                'icon_name' => 'https://flagcdn.com/gr.svg',
            ],
            [
                'code' => 'gs',
                'country_name' => 'South Georgia',
                'icon_name' => 'https://flagcdn.com/gs.svg',
            ],
            [
                'code' => 'gt',
                'country_name' => 'Guatemala',
                'icon_name' => 'https://flagcdn.com/gt.svg',
            ],
            [
                'code' => 'gu',
                'country_name' => 'Guam',
                'icon_name' => 'https://flagcdn.com/gu.svg',
            ],
            [
                'code' => 'gw',
                'country_name' => 'Guinea-Bissau',
                'icon_name' => 'https://flagcdn.com/gw.svg',
            ],
            [
                'code' => 'gy',
                'country_name' => 'Guyana',
                'icon_name' => 'https://flagcdn.com/gy.svg',
            ],
            [
                'code' => 'hk',
                'country_name' => 'Hong Kong',
                'icon_name' => 'https://flagcdn.com/hk.svg',
            ],
            [
                'code' => 'hm',
                'country_name' => 'Heard Island and McDonald Islands',
                'icon_name' => 'https://flagcdn.com/hm.svg',
            ],
            [
                'code' => 'hn',
                'country_name' => 'Honduras',
                'icon_name' => 'https://flagcdn.com/hn.svg',
            ],
            [
                'code' => 'hr',
                'country_name' => 'Croatia',
                'icon_name' => 'https://flagcdn.com/hr.svg',
            ],
            [
                'code' => 'ht',
                'country_name' => 'Haiti',
                'icon_name' => 'https://flagcdn.com/ht.svg',
            ],
            [
                'code' => 'hu',
                'country_name' => 'Hungary',
                'icon_name' => 'https://flagcdn.com/hu.svg',
            ],
            [
                'code' => 'id',
                'country_name' => 'Indonesia',
                'icon_name' => 'https://flagcdn.com/id.svg',
            ],
            [
                'code' => 'ie',
                'country_name' => 'Ireland',
                'icon_name' => 'https://flagcdn.com/ie.svg',
            ],
            [
                'code' => 'il',
                'country_name' => 'Israel',
                'icon_name' => 'https://flagcdn.com/il.svg',
            ],
            [
                'code' => 'im',
                'country_name' => 'Isle of Man',
                'icon_name' => 'https://flagcdn.com/im.svg',
            ],
            [
                'code' => 'in',
                'country_name' => 'India',
                'icon_name' => 'https://flagcdn.com/in.svg',
            ],
            [
                'code' => 'io',
                'country_name' => 'British Indian Ocean Territory',
                'icon_name' => 'https://flagcdn.com/io.svg',
            ],
            [
                'code' => 'iq',
                'country_name' => 'Iraq',
                'icon_name' => 'https://flagcdn.com/iq.svg',
            ],
            [
                'code' => 'ir',
                'country_name' => 'Iran',
                'icon_name' => 'https://flagcdn.com/ir.svg',
            ],
            [
                'code' => 'is',
                'country_name' => 'Iceland',
                'icon_name' => 'https://flagcdn.com/is.svg',
            ],
            [
                'code' => 'it',
                'country_name' => 'Italy',
                'icon_name' => 'https://flagcdn.com/it.svg',
            ],
            [
                'code' => 'je',
                'country_name' => 'Jersey',
                'icon_name' => 'https://flagcdn.com/je.svg',
            ],
            [
                'code' => 'jm',
                'country_name' => 'Jamaica',
                'icon_name' => 'https://flagcdn.com/jm.svg',
            ],
            [
                'code' => 'jo',
                'country_name' => 'Jordan',
                'icon_name' => 'https://flagcdn.com/jo.svg',
            ],
            [
                'code' => 'jp',
                'country_name' => 'Japan',
                'icon_name' => 'https://flagcdn.com/jp.svg',
            ],
            [
                'code' => 'ke',
                'country_name' => 'Kenya',
                'icon_name' => 'https://flagcdn.com/ke.svg',
            ],
            [
                'code' => 'kg',
                'country_name' => 'Kyrgyzstan',
                'icon_name' => 'https://flagcdn.com/kg.svg',
            ],
            [
                'code' => 'kh',
                'country_name' => 'Cambodia',
                'icon_name' => 'https://flagcdn.com/kh.svg',
            ],
            [
                'code' => 'ki',
                'country_name' => 'Kiribati',
                'icon_name' => 'https://flagcdn.com/ki.svg',
            ],
            [
                'code' => 'km',
                'country_name' => 'Comoros',
                'icon_name' => 'https://flagcdn.com/km.svg',
            ],
            [
                'code' => 'kn',
                'country_name' => 'Saint Kitts and Nevis',
                'icon_name' => 'https://flagcdn.com/kn.svg',
            ],
            [
                'code' => 'kp',
                'country_name' => 'North Korea',
                'icon_name' => 'https://flagcdn.com/kp.svg',
            ],
            [
                'code' => 'kr',
                'country_name' => 'South Korea',
                'icon_name' => 'https://flagcdn.com/kr.svg',
            ],
            [
                'code' => 'kw',
                'country_name' => 'Kuwait',
                'icon_name' => 'https://flagcdn.com/kw.svg',
            ],
            [
                'code' => 'ky',
                'country_name' => 'Cayman Islands',
                'icon_name' => 'https://flagcdn.com/ky.svg',
            ],
            [
                'code' => 'kz',
                'country_name' => 'Kazakhstan',
                'icon_name' => 'https://flagcdn.com/kz.svg',
            ],
            [
                'code' => 'la',
                'country_name' => 'Laos',
                'icon_name' => 'https://flagcdn.com/la.svg',
            ],
            [
                'code' => 'lb',
                'country_name' => 'Lebanon',
                'icon_name' => 'https://flagcdn.com/lb.svg',
            ],
            [
                'code' => 'lc',
                'country_name' => 'Saint Lucia',
                'icon_name' => 'https://flagcdn.com/lc.svg',
            ],
            [
                'code' => 'li',
                'country_name' => 'Liechtenstein',
                'icon_name' => 'https://flagcdn.com/li.svg',
            ],
            [
                'code' => 'lk',
                'country_name' => 'Sri Lanka',
                'icon_name' => 'https://flagcdn.com/lk.svg',
            ],
            [
                'code' => 'lr',
                'country_name' => 'Liberia',
                'icon_name' => 'https://flagcdn.com/lr.svg',
            ],
            [
                'code' => 'ls',
                'country_name' => 'Lesotho',
                'icon_name' => 'https://flagcdn.com/ls.svg',
            ],
            [
                'code' => 'lt',
                'country_name' => 'Lithuania',
                'icon_name' => 'https://flagcdn.com/lt.svg',
            ],
            [
                'code' => 'lu',
                'country_name' => 'Luxembourg',
                'icon_name' => 'https://flagcdn.com/lu.svg',
            ],
            [
                'code' => 'lv',
                'country_name' => 'Latvia',
                'icon_name' => 'https://flagcdn.com/lv.svg',
            ],
            [
                'code' => 'ly',
                'country_name' => 'Libya',
                'icon_name' => 'https://flagcdn.com/ly.svg',
            ],
            [
                'code' => 'ma',
                'country_name' => 'Morocco',
                'icon_name' => 'https://flagcdn.com/ma.svg',
            ],
            [
                'code' => 'mc',
                'country_name' => 'Monaco',
                'icon_name' => 'https://flagcdn.com/mc.svg',
            ],
            [
                'code' => 'md',
                'country_name' => 'Moldova',
                'icon_name' => 'https://flagcdn.com/md.svg',
            ],
            [
                'code' => 'me',
                'country_name' => 'Montenegro',
                'icon_name' => 'https://flagcdn.com/me.svg',
            ],
            [
                'code' => 'mf',
                'country_name' => 'Saint Martin',
                'icon_name' => 'https://flagcdn.com/mf.svg',
            ],
            [
                'code' => 'mg',
                'country_name' => 'Madagascar',
                'icon_name' => 'https://flagcdn.com/mg.svg',
            ],
            [
                'code' => 'mh',
                'country_name' => 'Marshall Islands',
                'icon_name' => 'https://flagcdn.com/mh.svg',
            ],
            [
                'code' => 'mk',
                'country_name' => 'North Macedonia',
                'icon_name' => 'https://flagcdn.com/mk.svg',
            ],
            [
                'code' => 'ml',
                'country_name' => 'Mali',
                'icon_name' => 'https://flagcdn.com/ml.svg',
            ],
            [
                'code' => 'mm',
                'country_name' => 'Myanmar',
                'icon_name' => 'https://flagcdn.com/mm.svg',
            ],
            [
                'code' => 'mn',
                'country_name' => 'Mongolia',
                'icon_name' => 'https://flagcdn.com/mn.svg',
            ],
            [
                'code' => 'mo',
                'country_name' => 'Macau',
                'icon_name' => 'https://flagcdn.com/mo.svg',
            ],
            [
                'code' => 'mp',
                'country_name' => 'Northern Mariana Islands',
                'icon_name' => 'https://flagcdn.com/mp.svg',
            ],
            [
                'code' => 'mq',
                'country_name' => 'Martinique',
                'icon_name' => 'https://flagcdn.com/mq.svg',
            ],
            [
                'code' => 'mr',
                'country_name' => 'Mauritania',
                'icon_name' => 'https://flagcdn.com/mr.svg',
            ],
            [
                'code' => 'ms',
                'country_name' => 'Montserrat',
                'icon_name' => 'https://flagcdn.com/ms.svg',
            ],
            [
                'code' => 'mt',
                'country_name' => 'Malta',
                'icon_name' => 'https://flagcdn.com/mt.svg',
            ],
            [
                'code' => 'mu',
                'country_name' => 'Mauritius',
                'icon_name' => 'https://flagcdn.com/mu.svg',
            ],
            [
                'code' => 'mv',
                'country_name' => 'Maldives',
                'icon_name' => 'https://flagcdn.com/mv.svg',
            ],
            [
                'code' => 'mw',
                'country_name' => 'Malawi',
                'icon_name' => 'https://flagcdn.com/mw.svg',
            ],
            [
                'code' => 'mx',
                'country_name' => 'Mexico',
                'icon_name' => 'https://flagcdn.com/mx.svg',
            ],
            [
                'code' => 'my',
                'country_name' => 'Malaysia',
                'icon_name' => 'https://flagcdn.com/my.svg',
            ],
            [
                'code' => 'mz',
                'country_name' => 'Mozambique',
                'icon_name' => 'https://flagcdn.com/mz.svg',
            ],
            [
                'code' => 'na',
                'country_name' => 'Namibia',
                'icon_name' => 'https://flagcdn.com/na.svg',
            ],
            [
                'code' => 'nc',
                'country_name' => 'New Caledonia',
                'icon_name' => 'https://flagcdn.com/nc.svg',
            ],
            [
                'code' => 'ne',
                'country_name' => 'Niger',
                'icon_name' => 'https://flagcdn.com/ne.svg',
            ],
            [
                'code' => 'nf',
                'country_name' => 'Norfolk Island',
                'icon_name' => 'https://flagcdn.com/nf.svg',
            ],
            [
                'code' => 'ng',
                'country_name' => 'Nigeria',
                'icon_name' => 'https://flagcdn.com/ng.svg',
            ],
            [
                'code' => 'ni',
                'country_name' => 'Nicaragua',
                'icon_name' => 'https://flagcdn.com/ni.svg',
            ],
            [
                'code' => 'nl',
                'country_name' => 'Netherlands',
                'icon_name' => 'https://flagcdn.com/nl.svg',
            ],
            [
                'code' => 'no',
                'country_name' => 'Norway',
                'icon_name' => 'https://flagcdn.com/no.svg',
            ],
            [
                'code' => 'np',
                'country_name' => 'Nepal',
                'icon_name' => 'https://flagcdn.com/np.svg',
            ],
            [
                'code' => 'nr',
                'country_name' => 'Nauru',
                'icon_name' => 'https://flagcdn.com/nr.svg',
            ],
            [
                'code' => 'nu',
                'country_name' => 'Niue',
                'icon_name' => 'https://flagcdn.com/nu.svg',
            ],
            [
                'code' => 'nz',
                'country_name' => 'New Zealand',
                'icon_name' => 'https://flagcdn.com/nz.svg',
            ],
            [
                'code' => 'om',
                'country_name' => 'Oman',
                'icon_name' => 'https://flagcdn.com/om.svg',
            ],
            [
                'code' => 'pa',
                'country_name' => 'Panama',
                'icon_name' => 'https://flagcdn.com/pa.svg',
            ],
            [
                'code' => 'pe',
                'country_name' => 'Peru',
                'icon_name' => 'https://flagcdn.com/pe.svg',
            ],
            [
                'code' => 'pf',
                'country_name' => 'French Polynesia',
                'icon_name' => 'https://flagcdn.com/pf.svg',
            ],
            [
                'code' => 'pg',
                'country_name' => 'Papua New Guinea',
                'icon_name' => 'https://flagcdn.com/pg.svg',
            ],
            [
                'code' => 'ph',
                'country_name' => 'Philippines',
                'icon_name' => 'https://flagcdn.com/ph.svg',
            ],
            [
                'code' => 'pk',
                'country_name' => 'Pakistan',
                'icon_name' => 'https://flagcdn.com/pk.svg',
            ],
            [
                'code' => 'pl',
                'country_name' => 'Poland',
                'icon_name' => 'https://flagcdn.com/pl.svg',
            ],
            [
                'code' => 'pm',
                'country_name' => 'Saint Pierre and Miquelon',
                'icon_name' => 'https://flagcdn.com/pm.svg',
            ],
            [
                'code' => 'pn',
                'country_name' => 'Pitcairn Islands',
                'icon_name' => 'https://flagcdn.com/pn.svg',
            ],
            [
                'code' => 'pr',
                'country_name' => 'Puerto Rico',
                'icon_name' => 'https://flagcdn.com/pr.svg',
            ],
            [
                'code' => 'ps',
                'country_name' => 'Palestine',
                'icon_name' => 'https://flagcdn.com/ps.svg',
            ],
            [
                'code' => 'pt',
                'country_name' => 'Portugal',
                'icon_name' => 'https://flagcdn.com/pt.svg',
            ],
            [
                'code' => 'pw',
                'country_name' => 'Palau',
                'icon_name' => 'https://flagcdn.com/pw.svg',
            ],
            [
                'code' => 'py',
                'country_name' => 'Paraguay',
                'icon_name' => 'https://flagcdn.com/py.svg',
            ],
            [
                'code' => 'qa',
                'country_name' => 'Qatar',
                'icon_name' => 'https://flagcdn.com/qa.svg',
            ],
            [
                'code' => 're',
                'country_name' => 'Réunion',
                'icon_name' => 'https://flagcdn.com/re.svg',
            ],
            [
                'code' => 'ro',
                'country_name' => 'Romania',
                'icon_name' => 'https://flagcdn.com/ro.svg',
            ],
            [
                'code' => 'rs',
                'country_name' => 'Serbia',
                'icon_name' => 'https://flagcdn.com/rs.svg',
            ],
            [
                'code' => 'ru',
                'country_name' => 'Russia',
                'icon_name' => 'https://flagcdn.com/ru.svg',
            ],
            [
                'code' => 'rw',
                'country_name' => 'Rwanda',
                'icon_name' => 'https://flagcdn.com/rw.svg',
            ],
            [
                'code' => 'sa',
                'country_name' => 'Saudi Arabia',
                'icon_name' => 'https://flagcdn.com/sa.svg',
            ],
            [
                'code' => 'sb',
                'country_name' => 'Solomon Islands',
                'icon_name' => 'https://flagcdn.com/sb.svg',
            ],
            [
                'code' => 'sc',
                'country_name' => 'Seychelles',
                'icon_name' => 'https://flagcdn.com/sc.svg',
            ],
            [
                'code' => 'sd',
                'country_name' => 'Sudan',
                'icon_name' => 'https://flagcdn.com/sd.svg',
            ],
            [
                'code' => 'se',
                'country_name' => 'Sweden',
                'icon_name' => 'https://flagcdn.com/se.svg',
            ],
            [
                'code' => 'sg',
                'country_name' => 'Singapore',
                'icon_name' => 'https://flagcdn.com/sg.svg',
            ],
            [
                'code' => 'sh',
                'country_name' => 'Saint Helena',
                'icon_name' => 'https://flagcdn.com/sh.svg',
            ],
            [
                'code' => 'si',
                'country_name' => 'Slovenia',
                'icon_name' => 'https://flagcdn.com/si.svg',
            ],
            [
                'code' => 'sj',
                'country_name' => 'Svalbard and Jan Mayen',
                'icon_name' => 'https://flagcdn.com/sj.svg',
            ],
            [
                'code' => 'sk',
                'country_name' => 'Slovakia',
                'icon_name' => 'https://flagcdn.com/sk.svg',
            ],
            [
                'code' => 'sl',
                'country_name' => 'Sierra Leone',
                'icon_name' => 'https://flagcdn.com/sl.svg',
            ],
            [
                'code' => 'sm',
                'country_name' => 'San Marino',
                'icon_name' => 'https://flagcdn.com/sm.svg',
            ],
            [
                'code' => 'sn',
                'country_name' => 'Senegal',
                'icon_name' => 'https://flagcdn.com/sn.svg',
            ],
            [
                'code' => 'so',
                'country_name' => 'Somalia',
                'icon_name' => 'https://flagcdn.com/so.svg',
            ],
            [
                'code' => 'sr',
                'country_name' => 'Suriname',
                'icon_name' => 'https://flagcdn.com/sr.svg',
            ],
            [
                'code' => 'ss',
                'country_name' => 'South Sudan',
                'icon_name' => 'https://flagcdn.com/ss.svg',
            ],
            [
                'code' => 'st',
                'country_name' => 'São Tomé and Príncipe',
                'icon_name' => 'https://flagcdn.com/st.svg',
            ],
            [
                'code' => 'sv',
                'country_name' => 'El Salvador',
                'icon_name' => 'https://flagcdn.com/sv.svg',
            ],
            [
                'code' => 'sx',
                'country_name' => 'Sint Maarten',
                'icon_name' => 'https://flagcdn.com/sx.svg',
            ],
            [
                'code' => 'sy',
                'country_name' => 'Syria',
                'icon_name' => 'https://flagcdn.com/sy.svg',
            ],
            [
                'code' => 'sz',
                'country_name' => 'Eswatini',
                'icon_name' => 'https://flagcdn.com/sz.svg',
            ],
            [
                'code' => 'tc',
                'country_name' => 'Turks and Caicos Islands',
                'icon_name' => 'https://flagcdn.com/tc.svg',
            ],
            [
                'code' => 'td',
                'country_name' => 'Chad',
                'icon_name' => 'https://flagcdn.com/td.svg',
            ],
            [
                'code' => 'tf',
                'country_name' => 'French Southern and Antarctic Lands',
                'icon_name' => 'https://flagcdn.com/tf.svg',
            ],
            [
                'code' => 'tg',
                'country_name' => 'Togo',
                'icon_name' => 'https://flagcdn.com/tg.svg',
            ],
            [
                'code' => 'th',
                'country_name' => 'Thailand',
                'icon_name' => 'https://flagcdn.com/th.svg',
            ],
            [
                'code' => 'tj',
                'country_name' => 'Tajikistan',
                'icon_name' => 'https://flagcdn.com/tj.svg',
            ],
            [
                'code' => 'tk',
                'country_name' => 'Tokelau',
                'icon_name' => 'https://flagcdn.com/tk.svg',
            ],
            [
                'code' => 'tl',
                'country_name' => 'Timor-Leste',
                'icon_name' => 'https://flagcdn.com/tl.svg',
            ],
            [
                'code' => 'tm',
                'country_name' => 'Turkmenistan',
                'icon_name' => 'https://flagcdn.com/tm.svg',
            ],
            [
                'code' => 'tn',
                'country_name' => 'Tunisia',
                'icon_name' => 'https://flagcdn.com/tn.svg',
            ],
            [
                'code' => 'to',
                'country_name' => 'Tonga',
                'icon_name' => 'https://flagcdn.com/to.svg',
            ],
            [
                'code' => 'tr',
                'country_name' => 'Turkey',
                'icon_name' => 'https://flagcdn.com/tr.svg',
            ],
            [
                'code' => 'tt',
                'country_name' => 'Trinidad and Tobago',
                'icon_name' => 'https://flagcdn.com/tt.svg',
            ],
            [
                'code' => 'tv',
                'country_name' => 'Tuvalu',
                'icon_name' => 'https://flagcdn.com/tv.svg',
            ],
            [
                'code' => 'tw',
                'country_name' => 'Taiwan',
                'icon_name' => 'https://flagcdn.com/tw.svg',
            ],
            [
                'code' => 'tz',
                'country_name' => 'Tanzania',
                'icon_name' => 'https://flagcdn.com/tz.svg',
            ],
            [
                'code' => 'ua',
                'country_name' => 'Ukraine',
                'icon_name' => 'https://flagcdn.com/ua.svg',
            ],
            [
                'code' => 'ug',
                'country_name' => 'Uganda',
                'icon_name' => 'https://flagcdn.com/ug.svg',
            ],
            [
                'code' => 'um',
                'country_name' => 'United States Minor Outlying Islands',
                'icon_name' => 'https://flagcdn.com/um.svg',
            ],
            [
                'code' => 'us',
                'country_name' => 'United States',
                'icon_name' => 'https://flagcdn.com/us.svg',
            ],
            [
                'code' => 'uy',
                'country_name' => 'Uruguay',
                'icon_name' => 'https://flagcdn.com/uy.svg',
            ],
            [
                'code' => 'uz',
                'country_name' => 'Uzbekistan',
                'icon_name' => 'https://flagcdn.com/uz.svg',
            ],
            [
                'code' => 'va',
                'country_name' => 'Vatican City',
                'icon_name' => 'https://flagcdn.com/va.svg',
            ],
            [
                'code' => 'vc',
                'country_name' => 'Saint Vincent and the Grenadines',
                'icon_name' => 'https://flagcdn.com/vc.svg',
            ],
            [
                'code' => 've',
                'country_name' => 'Venezuela',
                'icon_name' => 'https://flagcdn.com/ve.svg',
            ],
            [
                'code' => 'vg',
                'country_name' => 'British Virgin Islands',
                'icon_name' => 'https://flagcdn.com/vg.svg',
            ],
            [
                'code' => 'vi',
                'country_name' => 'United States Virgin Islands',
                'icon_name' => 'https://flagcdn.com/vi.svg',
            ],
            [
                'code' => 'vn',
                'country_name' => 'Vietnam',
                'icon_name' => 'https://flagcdn.com/vn.svg',
            ],
            [
                'code' => 'vu',
                'country_name' => 'Vanuatu',
                'icon_name' => 'https://flagcdn.com/vu.svg',
            ],
            [
                'code' => 'wf',
                'country_name' => 'Wallis and Futuna',
                'icon_name' => 'https://flagcdn.com/wf.svg',
            ],
            [
                'code' => 'ws',
                'country_name' => 'Samoa',
                'icon_name' => 'https://flagcdn.com/ws.svg',
            ],
            [
                'code' => 'xk',
                'country_name' => 'Kosovo',
                'icon_name' => 'https://flagcdn.com/xk.svg',
            ],
            [
                'code' => 'ye',
                'country_name' => 'Yemen',
                'icon_name' => 'https://flagcdn.com/ye.svg',
            ],
            [
                'code' => 'yt',
                'country_name' => 'Mayotte',
                'icon_name' => 'https://flagcdn.com/yt.svg',
            ],
            [
                'code' => 'za',
                'country_name' => 'South Africa',
                'icon_name' => 'https://flagcdn.com/za.svg',
            ],
            [
                'code' => 'zm',
                'country_name' => 'Zambia',
                'icon_name' => 'https://flagcdn.com/zm.svg',
            ],
            [
                'code' => 'zw',
                'country_name' => 'Zimbabwe',
                'icon_name' => 'https://flagcdn.com/zw.svg',
            ],
        ];
        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'code' => $country['code'],
                'country_name' => $country['country_name'],
                'icon_name' => $country['icon_name'],
            ]);
        }
    }
}