<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
		DB::table('Pais')->insert([
		['idPais' => 1	, 'nombre' => 'Afghanistan'							],
		['idPais' => 2	, 'nombre' => 'Albania'                             ],
		['idPais' => 3	, 'nombre' => 'Algeria'                             ],
		['idPais' => 4	, 'nombre' => 'American Samoa'                      ],
		['idPais' => 5	, 'nombre' => 'Andorra'                             ],
		['idPais' => 6	, 'nombre' => 'Angola'                              ],
		['idPais' => 7	, 'nombre' => 'Anguilla'                            ],
		['idPais' => 8	, 'nombre' => 'Antigua & Barbuda'                   ],
		['idPais' => 9	, 'nombre' => 'Argentina'                           ],
		['idPais' => 10	, 'nombre' => 'Armenia'                             ],
		['idPais' => 11	, 'nombre' => 'Aruba'                               ],
		['idPais' => 12	, 'nombre' => 'Australia'                           ],
		['idPais' => 13	, 'nombre' => 'Austria'                             ],
		['idPais' => 14	, 'nombre' => 'Azerbaijan'                          ],
		['idPais' => 15	, 'nombre' => 'Bahamas'                             ],
		['idPais' => 16	, 'nombre' => 'Bahrain'                             ],
		['idPais' => 17	, 'nombre' => 'Bangladesh'                          ],
		['idPais' => 18	, 'nombre' => 'Barbados'                            ],
		['idPais' => 19	, 'nombre' => 'Belarus'                             ],
		['idPais' => 20	, 'nombre' => 'Belgium'                             ],
		['idPais' => 21	, 'nombre' => 'Belize'                              ],
		['idPais' => 22	, 'nombre' => 'Benin'                               ],
		['idPais' => 23	, 'nombre' => 'Bermuda'                             ],
		['idPais' => 24	, 'nombre' => 'Bhutan'                              ],
		['idPais' => 25	, 'nombre' => 'Bolivia'                             ],
		['idPais' => 26	, 'nombre' => 'Bosnia & Herzegovina'                ],
		['idPais' => 27	, 'nombre' => 'Botswana'                            ],
		['idPais' => 28	, 'nombre' => 'Brazil'                              ],
		['idPais' => 29	, 'nombre' => 'British Virgin Is.'                  ],
		['idPais' => 30	, 'nombre' => 'Brunei'                              ],
		['idPais' => 31	, 'nombre' => 'Bulgaria'                            ],
		['idPais' => 32	, 'nombre' => 'Burkina Faso'                        ],
		['idPais' => 33	, 'nombre' => 'Burma'                               ],
		['idPais' => 34	, 'nombre' => 'Burundi'                             ],
		['idPais' => 35	, 'nombre' => 'Cambodia'                            ],
		['idPais' => 36	, 'nombre' => 'Cameroon'                            ],
		['idPais' => 37	, 'nombre' => 'Canada'                              ],
		['idPais' => 38	, 'nombre' => 'Cape Verde'                          ],
		['idPais' => 39	, 'nombre' => 'Cayman Islands'                      ],
		['idPais' => 40	, 'nombre' => 'Central African Rep.'                ],
		['idPais' => 41	, 'nombre' => 'Chad'                                ],
		['idPais' => 42	, 'nombre' => 'Chile'                               ],
		['idPais' => 43	, 'nombre' => 'China'                               ],
		['idPais' => 44	, 'nombre' => 'Colombia'                            ],
		['idPais' => 45	, 'nombre' => 'Comoros'                             ],
		['idPais' => 46	, 'nombre' => 'Congo, Dem. Rep.'                    ],
		['idPais' => 47	, 'nombre' => 'Congo, Repub. of the'                ],
		['idPais' => 48	, 'nombre' => 'Cook Islands'                        ],
		['idPais' => 49	, 'nombre' => 'Costa Rica'                          ],
		['idPais' => 50	, 'nombre' => 'Cote d Ivoire'                       ],
		['idPais' => 51	, 'nombre' => 'Croatia'                             ],
		['idPais' => 52	, 'nombre' => 'Cuba'                                ],
		['idPais' => 53	, 'nombre' => 'Cyprus'                              ],
		['idPais' => 54	, 'nombre' => 'Czech Republic'                      ],
		['idPais' => 55	, 'nombre' => 'Denmark'                             ],
		['idPais' => 56	, 'nombre' => 'Djibouti'                            ],
		['idPais' => 57	, 'nombre' => 'Dominica'                            ],
		['idPais' => 58	, 'nombre' => 'Dominican Republic'                  ],
		['idPais' => 59	, 'nombre' => 'East Timor'                          ],
		['idPais' => 60	, 'nombre' => 'Ecuador'                             ],
		['idPais' => 61	, 'nombre' => 'Egypt'                               ],
		['idPais' => 62	, 'nombre' => 'El Salvador'                         ],
		['idPais' => 63	, 'nombre' => 'Equatorial Guinea'                   ],
		['idPais' => 64	, 'nombre' => 'Eritrea'                             ],
		['idPais' => 65	, 'nombre' => 'Estonia'                             ],
		['idPais' => 66	, 'nombre' => 'Ethiopia'                            ],
		['idPais' => 67	, 'nombre' => 'Faroe Islands'                       ],
		['idPais' => 68	, 'nombre' => 'Fiji'                                ],
		['idPais' => 69	, 'nombre' => 'Finland'                             ],
		['idPais' => 70	, 'nombre' => 'France'                              ],
		['idPais' => 71	, 'nombre' => 'French Guiana'                       ],
		['idPais' => 72	, 'nombre' => 'French Polynesia'                    ],
		['idPais' => 73	, 'nombre' => 'Gabon'                               ],
		['idPais' => 74	, 'nombre' => 'Gambia'                              ],
		['idPais' => 75	, 'nombre' => 'Gaza Strip'                          ],
		['idPais' => 76	, 'nombre' => 'Georgia'                             ],
		['idPais' => 77	, 'nombre' => 'Germany'                             ],
		['idPais' => 78	, 'nombre' => 'Ghana'                               ],
		['idPais' => 79	, 'nombre' => 'Gibraltar'                           ],
		['idPais' => 80	, 'nombre' => 'Greece'                              ],
		['idPais' => 81	, 'nombre' => 'Greenland'                           ],
		['idPais' => 82	, 'nombre' => 'Grenada'                             ],
		['idPais' => 83	, 'nombre' => 'Guadeloupe'                          ],
		['idPais' => 84	, 'nombre' => 'Guam'                                ],
		['idPais' => 85	, 'nombre' => 'Guatemala'                           ],
		['idPais' => 86	, 'nombre' => 'Guernsey'                            ],
		['idPais' => 87	, 'nombre' => 'Guinea'                              ],
		['idPais' => 88	, 'nombre' => 'Guinea-Bissau'                       ],
		['idPais' => 89	, 'nombre' => 'Guyana'                              ],
		['idPais' => 90	, 'nombre' => 'Haiti'                               ],
		['idPais' => 91	, 'nombre' => 'Honduras'                            ],
		['idPais' => 92	, 'nombre' => 'Hong Kong'                           ],
		['idPais' => 93	, 'nombre' => 'Hungary'                             ],
		['idPais' => 94	, 'nombre' => 'Iceland'                             ],
		['idPais' => 95	, 'nombre' => 'India'                               ],
		['idPais' => 96	, 'nombre' => 'Indonesia'                           ],
		['idPais' => 97	, 'nombre' => 'Iran'                                ],
		['idPais' => 98	, 'nombre' => 'Iraq'                                ],
		['idPais' => 99	, 'nombre' => 'Ireland'                             ],
		['idPais' => 100, 'nombre' => 'Isle of Man'                         ],
		['idPais' => 101, 'nombre' => 'Israel'                              ],
		['idPais' => 102, 'nombre' => 'Italy'                               ],
		['idPais' => 103, 'nombre' => 'Jamaica'                             ],
		['idPais' => 104, 'nombre' => 'Japan'                               ],
		['idPais' => 105, 'nombre' => 'Jersey'                              ],
		['idPais' => 106, 'nombre' => 'Jordan'                              ],
		['idPais' => 107, 'nombre' => 'Kazakhstan'                          ],
		['idPais' => 108, 'nombre' => 'Kenya'                               ],
		['idPais' => 109, 'nombre' => 'Kiribati'                            ],
		['idPais' => 110, 'nombre' => 'North Korea'                         ],
		['idPais' => 111, 'nombre' => 'South Kore'                          ],
		['idPais' => 112, 'nombre' => 'Kuwait'                              ],
		['idPais' => 113, 'nombre' => 'Kyrgyzstan'                          ],
		['idPais' => 114, 'nombre' => 'Laos'                                ],
		['idPais' => 115, 'nombre' => 'Latvia'                              ],
		['idPais' => 116, 'nombre' => 'Lebanon'                             ],
		['idPais' => 117, 'nombre' => 'Lesotho'                             ],
		['idPais' => 118, 'nombre' => 'Liberia'                             ],
		['idPais' => 119, 'nombre' => 'Libya'                               ],
		['idPais' => 120, 'nombre' => 'Liechtenstein'                       ],
		['idPais' => 121, 'nombre' => 'Lithuania'                           ],
		['idPais' => 122, 'nombre' => 'Luxembourg'                          ],
		['idPais' => 123, 'nombre' => 'Macau'                               ],
		['idPais' => 124, 'nombre' => 'Macedonia'                           ],
		['idPais' => 125, 'nombre' => 'Madagascar'                          ],
		['idPais' => 126, 'nombre' => 'Malawi'                              ],
		['idPais' => 127, 'nombre' => 'Malaysia'                            ],
		['idPais' => 128, 'nombre' => 'Maldives'                            ],
		['idPais' => 129, 'nombre' => 'Mali'                                ],
		['idPais' => 130, 'nombre' => 'Malta'                               ],
		['idPais' => 131, 'nombre' => 'Marshall Islands'                    ],
		['idPais' => 132, 'nombre' => 'Martinique'                          ],
		['idPais' => 133, 'nombre' => 'Mauritania'                          ],
		['idPais' => 134, 'nombre' => 'Mauritius'                           ],
		['idPais' => 135, 'nombre' => 'Mayotte'                             ],
		['idPais' => 136, 'nombre' => 'Mexico'                              ],
		['idPais' => 137, 'nombre' => 'Micronesia'                          ],
		['idPais' => 138, 'nombre' => 'Moldova'                             ],
		['idPais' => 139, 'nombre' => 'Monaco'                              ],
		['idPais' => 140, 'nombre' => 'Mongolia'                            ],
		['idPais' => 141, 'nombre' => 'Montserrat'                          ],
		['idPais' => 142, 'nombre' => 'Morocco'                             ],
		['idPais' => 143, 'nombre' => 'Mozambique'                          ],
		['idPais' => 144, 'nombre' => 'Namibia'                             ],
		['idPais' => 145, 'nombre' => 'Nauru'                               ],
		['idPais' => 146, 'nombre' => 'Nepal'                               ],
		['idPais' => 147, 'nombre' => 'Netherlands'                         ],
		['idPais' => 148, 'nombre' => 'Netherlands Antilles'                ],
		['idPais' => 149, 'nombre' => 'New Caledonia'                       ],
		['idPais' => 150, 'nombre' => 'New Zealand'                         ],
		['idPais' => 151, 'nombre' => 'Nicaragua'                           ],
		['idPais' => 152, 'nombre' => 'Niger'                               ],
		['idPais' => 153, 'nombre' => 'Nigeria'                             ],
		['idPais' => 154, 'nombre' => 'N. Mariana Islands'                  ],
		['idPais' => 155, 'nombre' => 'Norway'                              ],
		['idPais' => 156, 'nombre' => 'Oman'                                ],
		['idPais' => 157, 'nombre' => 'Pakistan'                            ],
		['idPais' => 158, 'nombre' => 'Palau'                               ],
		['idPais' => 159, 'nombre' => 'Panama'                              ],
		['idPais' => 160, 'nombre' => 'Papua New Guinea'                    ],
		['idPais' => 161, 'nombre' => 'Paraguay'                            ],
		['idPais' => 162, 'nombre' => 'Peru'                                ],
		['idPais' => 163, 'nombre' => 'Philippines'                         ],
		['idPais' => 164, 'nombre' => 'Poland'                              ],
		['idPais' => 165, 'nombre' => 'Portugal'                            ],
		['idPais' => 166, 'nombre' => 'Puerto Rico'                         ],
		['idPais' => 167, 'nombre' => 'Qatar'                               ],
		['idPais' => 168, 'nombre' => 'Reunion'                             ],
		['idPais' => 169, 'nombre' => 'Romania'                             ],
		['idPais' => 170, 'nombre' => 'Russia'                              ],
		['idPais' => 171, 'nombre' => 'Rwanda'                              ],
		['idPais' => 172, 'nombre' => 'Saint Helena'                        ],
		['idPais' => 173, 'nombre' => 'Saint Kitts & Nevis'                 ],
		['idPais' => 174, 'nombre' => 'Saint Lucia'                         ],
		['idPais' => 175, 'nombre' => 'St Pierre & Miquelon'                ],
		['idPais' => 176, 'nombre' => 'Saint Vincent and the Grenadines'    ],
		['idPais' => 177, 'nombre' => 'Samoa'                               ],
		['idPais' => 178, 'nombre' => 'San Marino'                          ],
		['idPais' => 179, 'nombre' => 'Sao Tome & Principe'                 ],
		['idPais' => 180, 'nombre' => 'Saudi Arabia'                        ],
		['idPais' => 181, 'nombre' => 'Senegal'                             ],
		['idPais' => 182, 'nombre' => 'Serbia'                              ],
		['idPais' => 183, 'nombre' => 'Seychelles'                          ],
		['idPais' => 184, 'nombre' => 'Sierra Leone'                        ],
		['idPais' => 185, 'nombre' => 'Singapore'                           ],
		['idPais' => 186, 'nombre' => 'Slovakia'                            ],
		['idPais' => 187, 'nombre' => 'Slovenia'                            ],
		['idPais' => 188, 'nombre' => 'Solomon Islands'                     ],
		['idPais' => 189, 'nombre' => 'Somalia'                             ],
		['idPais' => 190, 'nombre' => 'South Africa'                        ],
		['idPais' => 191, 'nombre' => 'Spain'                               ],
		['idPais' => 192, 'nombre' => 'Sri Lanka'                           ],
		['idPais' => 193, 'nombre' => 'Sudan'                               ],
		['idPais' => 194, 'nombre' => 'Suriname'                            ],
		['idPais' => 195, 'nombre' => 'Swaziland'                           ],
		['idPais' => 196, 'nombre' => 'Sweden'                              ],
		['idPais' => 197, 'nombre' => 'Switzerland'                         ],
		['idPais' => 198, 'nombre' => 'Syria'                               ],
		['idPais' => 199, 'nombre' => 'Taiwan'                              ],
		['idPais' => 200, 'nombre' => 'Tajikistan'                          ],
		['idPais' => 201, 'nombre' => 'Tanzania'                            ],
		['idPais' => 202, 'nombre' => 'Thailand'                            ],
		['idPais' => 203, 'nombre' => 'Togo'                                ],
		['idPais' => 204, 'nombre' => 'Tonga'                               ],
		['idPais' => 205, 'nombre' => 'Trinidad & Tobago'                   ],
		['idPais' => 206, 'nombre' => 'Tunisia'                             ],
		['idPais' => 207, 'nombre' => 'Turkey'                              ],
		['idPais' => 208, 'nombre' => 'Turkmenistan'                        ],
		['idPais' => 209, 'nombre' => 'Turks & Caicos Is'                   ],
		['idPais' => 210, 'nombre' => 'Tuvalu'                              ],
		['idPais' => 211, 'nombre' => 'Uganda'                              ],
		['idPais' => 212, 'nombre' => 'Ukraine'                             ],
		['idPais' => 213, 'nombre' => 'United Arab Emirates'                ],
		['idPais' => 214, 'nombre' => 'United Kingdom'                      ],
		['idPais' => 215, 'nombre' => 'United States'                       ],
		['idPais' => 216, 'nombre' => 'Uruguay'                             ],
		['idPais' => 217, 'nombre' => 'Uzbekistan'                          ],
		['idPais' => 218, 'nombre' => 'Vanuatu'                             ],
		['idPais' => 219, 'nombre' => 'Venezuela'                           ],
		['idPais' => 220, 'nombre' => 'Vietnam'                             ],
		['idPais' => 221, 'nombre' => 'Virgin Islands'                      ],
		['idPais' => 222, 'nombre' => 'Wallis and Futuna'                   ],
		['idPais' => 223, 'nombre' => 'West Bank'                           ],
		['idPais' => 224, 'nombre' => 'Western Sahara'                      ],
		['idPais' => 225, 'nombre' => 'Yemen'                               ],
		['idPais' => 226, 'nombre' => 'Zambia'                              ],
		['idPais' => 227, 'nombre' => 'Zimbabwe'                            ]
		);
		
    }
	
}
