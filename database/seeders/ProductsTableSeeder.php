<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 8,
                'brand_id' => 12,
                'category_id' => 5,
                'subcategory_id' => 4,
                'subsubcategory_id' => 1,
                'product_name_en' => 'Dell Vostro 14 3405 ',
                'product_name_bn' => 'Dell Vostro 14 3405',
                'product_slug_en' => 'dell vostro 14 3405',
                'product_slug_bn' => '65 / 5,000 Translation results Dell Vostro 14 3405 Ryzen 3 3250U 14" Windows 10 এর সাথে FHD ল্যাপটপ',
                'product_tags_en' => 'Dell',
                'product_tags_bn' => 'ডেল',
                'product_qty' => '0',
                'product_code' => 'BULLSEYEV14AMD21055501',
                'product_size_en' => '19.90 x 328.70 x 239.50mm',
                'product_size_bn' => '19.90 x 328.70 x 239.50mm',
                'product_color_en' => 'Silver, Black, White',
                'product_color_bn' => 'সিলভার',
                'selling_price' => '46000',
                'discount_price' => '47500',
            'short_descp_en' => '<p><span style="color: rgb(1, 19, 45); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px; text-align: justify;">Dell Vostro 14 3405 Laptop powered by Ryzen 3 3250U (4MB CPU Cache, 2.60GHz up to 3.50GHz) processor with AMD Radeon Graphics. This Dell Vostro 14 3405 Laptop comes with 4GB 3200 MHz DDR4 RAM, 1TB 5400rpm SATA HDD storage capacity for responsive and stable performance. The Dell Vostro 14 3405 featured with 14" FHD (1920x1080) LED</span><br></p>',
            'short_descp_bn' => '<p>AMD Radeon Graphics সহ Ryzen 3 3250U (4MB CPU ক্যাশে, 2.60GHz পর্যন্ত 3.50GHz) প্রসেসর দ্বারা চালিত Dell Vostro 14 3405 ল্যাপটপ। এই Dell Vostro 14 3405 ল্যাপটপটি 4GB 3200 MHz DDR4 RAM, 1TB 5400rpm SATA HDD স্টোরেজ ক্ষমতা সহ প্রতিক্রিয়াশীল এবং স্থিতিশীল কর্মক্ষমতার জন্য আসে।&nbsp;<br></p>',
            'long_descp_en' => '<p><span style="color: rgb(1, 19, 45); font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: 15px; text-align: justify;">Dell Vostro 14 3405 Laptop powered by Ryzen 3 3250U (4MB CPU Cache, 2.60GHz up to 3.50GHz) processor with AMD Radeon Graphics. This Dell Vostro 14 3405 Laptop comes with 4GB 3200 MHz DDR4 RAM, 1TB 5400rpm SATA HDD storage capacity for responsive and stable performance. The Dell Vostro 14 3405 featured with 14" FHD (1920x1080) LED, Anti-glare, 60Hz, Narrow Border, 220 Nits, 45% CG, Wide-viewing angle, IPS (In-Plane Switching), WLED display. This brilliant FHD panel (220 nits) offers more brightness and vivid color for an enhanced front-of-screen experience, and also its 2-sided narrow border emphasizes your screen while helping minimize distractions. This Laptop will provide you with an excellent experience with seamless wireless integration between your laptop and Android or iOS smartphone. Dell Mobile Connect allows you to access multiple devices and applications without dividing your attention. This new Dell Vostro 14 3405 laptops is equipped with an array of ports and an SD card reader to keep you connected to what matters most, here it has Card Slot x 1, SD Media Card Reader, 1 x USB2.0, 1 x USB 3.2 Gen 1 Type-A, Headphone Port Combo, Microphone Port Combo with Security Lock Slot 1 x Wedge-shaped lock slot and Ports are also available and the Trusted Platform Module 2.0 is a commercial-grade security chip installed on the motherboard that creates and stores passwords and encryption keys. It verifies that the computer has not been tampered with before booting up and protects your data against external software attacks from hackers. This Dell Vostro 14 3405 Starting at 1.59kg and under 20mm thin, the new and improved Vostro 14 3000 is ready to go whenever you are. The Latest Dell Vostro 14 3405 Laptop offers 02 Years Warranty (Battery &amp; Adapter 2 years).</span><br></p>',
            'long_descp_bn' => '<p>AMD Radeon Graphics সহ Ryzen 3 3250U (4MB CPU ক্যাশে, 2.60GHz পর্যন্ত 3.50GHz) প্রসেসর দ্বারা চালিত Dell Vostro 14 3405 ল্যাপটপ। এই Dell Vostro 14 3405 ল্যাপটপটি 4GB 3200 MHz DDR4 RAM, 1TB 5400rpm SATA HDD স্টোরেজ ক্ষমতা সহ প্রতিক্রিয়াশীল এবং স্থিতিশীল কর্মক্ষমতার জন্য আসে। Dell Vostro 14 3405 14" FHD (1920x1080) LED, অ্যান্টি-গ্লেয়ার, 60Hz, ন্যারো বর্ডার, 220 Nits, 45% CG, ওয়াইড-ভিউইং অ্যাঙ্গেল, IPS (ইন-প্লেন সুইচিং), WLED ডিসপ্লে সহ বৈশিষ্ট্যযুক্ত। এই FHD ডিসপ্লে। প্যানেল (220 nits) একটি বর্ধিত ফ্রন্ট-অফ-স্ক্রীন অভিজ্ঞতার জন্য আরও উজ্জ্বলতা এবং প্রাণবন্ত রঙ সরবরাহ করে এবং এর 2-পার্শ্বযুক্ত সংকীর্ণ সীমানা আপনার স্ক্রীনের উপর জোর দেয় যখন বিভ্রান্তিগুলি হ্রাস করতে সহায়তা করে৷ এই ল্যাপটপটি আপনাকে নির্বিঘ্ন ওয়্যারলেস ইন্টিগ্রেশনের সাথে একটি দুর্দান্ত অভিজ্ঞতা প্রদান করবে আপনার ল্যাপটপ এবং অ্যান্ড্রয়েড বা iOS স্মার্টফোনের মধ্যে। ডেল মোবাইল কানেক্ট আপনাকে আপনার মনোযোগ ভাগ না করেই একাধিক ডিভাইস এবং অ্যাপ্লিকেশন অ্যাক্সেস করার অনুমতি দেয়। এই নতুন ডেল ভোস্ট্রো 14 3405 ল্যাপটপগুলি আপনাকে কীসের সাথে সংযুক্ত রাখতে পোর্টের অ্যারে এবং একটি SD কার্ড রিডার দিয়ে সজ্জিত। সবচেয়ে গুরুত্বপূর্ণ, এখানে কার্ড স্লট x 1, SD মিডিয়া কার্ড রিডার, 1 x USB2.0, 1 x USB 3.2 Gen 1 Type-A, হেডফোন পোর্ট কম্বো, নিরাপত্তা লক স্লট 1 x ওয়েজ-আকৃতির লক স্লট সহ মাইক্রোফোন পোর্ট কম্বো এবং পোর্ট এছাড়াও উপলব্ধ এবং Tru স্টেড প্ল্যাটফর্ম মডিউল 2.0 হল মাদারবোর্ডে ইনস্টল করা একটি বাণিজ্যিক-গ্রেড নিরাপত্তা চিপ যা পাসওয়ার্ড এবং এনক্রিপশন কী তৈরি ও সংরক্ষণ করে। এটি যাচাই করে যে বুট আপ করার আগে কম্পিউটারের সাথে টেম্পার করা হয়নি এবং হ্যাকারদের থেকে বাহ্যিক সফ্টওয়্যার আক্রমণ থেকে আপনার ডেটা রক্ষা করে। এই Dell Vostro 14 3405 1.59kg থেকে শুরু করে এবং 20mm এর কম পাতলা, নতুন এবং উন্নত Vostro 14 3000 আপনি যখনই থাকবেন তখনই যেতে প্রস্তুত৷ সর্বশেষ Dell Vostro 14 3405 ল্যাপটপ 02 বছরের ওয়ারেন্টি (ব্যাটারি এবং অ্যাডাপ্টার 2 বছর) অফার করে।<br></p>',
                'product_thumbnail' => 'uploads/thumb/1748661566252891.jpg',
                'hot_deals' => 1,
                'featured' => 1,
                'special_offer' => 1,
                'special_deals' => 1,
                'status' => 1,
                'created_at' => '2022-11-05 13:07:04',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'brand_id' => 14,
                'category_id' => 5,
                'subcategory_id' => 4,
                'subsubcategory_id' => 2,
                'product_name_en' => 'HP Spectre X360 ',
                'product_name_bn' => 'HP Specter X360 ',
                'product_slug_en' => 'hp spectre x360 ',
                'product_slug_bn' => 'HP Specter X360 কনভার্টেবল 14-EA1590TU Core-I7 11TH Gen Laptop',
                'product_tags_en' => 'HP',
                'product_tags_bn' => 'এইচপি',
                'product_qty' => '5',
                'product_code' => 'HP X360',
                'product_size_en' => '',
                'product_size_bn' => '14',
                'product_color_en' => 'Black',
                'product_color_bn' => 'কালো',
                'selling_price' => '178000',
                'discount_price' => '179000',
            'short_descp_en' => '<table class="table table-bordered" style="box-sizing: border-box; border-collapse: inherit; background-color: rgb(255, 255, 255); width: 435px; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; margin-bottom: 0px !important; border-width: initial !important; border-style: none !important;"><tbody style="box-sizing: border-box; display: block !important;"><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Processor: INTEL Core-I7 11TH GEN-1195G7</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important; background: transparent !important;">Memory: 16GB DDR4</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Storage: 1TB M.2 PCIe NVME SSD</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important; background: transparent !important;">IGPU: Intel Iris Xᵉ Graphics</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Display: 13.3 FHD Touch</td></tr></tbody></table>',
                'short_descp_bn' => '<p>প্রসেসর: INTEL Core-I7 11TH GEN-1195G7</p><p>মেমরি: 16GB DDR4</p><p>স্টোরেজ: 1TB M.2 PCIe NVME SSD</p><p>IGPU: Intel Iris Xᵉ গ্রাফিক্স</p><p>ডিসপ্লে: 13.3 FHD টাচ</p>',
            'long_descp_en' => '<p><span style="color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif;">HP Spectre x360 Convertible 14-ea1590TU is powered by Intel Core-i7 11th Gen-1195G7 (2.90 To 5.00 GHz) processor. It comes with a powerful 16GB DDR4 memory. This laptop also has 1TB M.2 NVMe SSD to give more storage and speed up your work. HP Spectre x360 Convertible 14-ea1590TU is integrated with Intel Iris Xᵉ Graphics. It has a 13.3-inch Full HD display with touch support. It also comes with an Active Pen. It has an HP True Vision 720p camera to enhance your video call experience. This laptop is powered by 4-cell, 66 Wh Li-ion polymer battery to give you long-time support. It runs on Windows 11 Home operating system. HP Spectre x360 Convertible 14-ea1590TU comes with a 2 Years HP standard warranty.</span><br></p>',
            'long_descp_bn' => '<p>HP Specter x360 Convertible 14-ea1590TU Intel Core-i7 11th Gen-1195G7 (2.90 থেকে 5.00 GHz) প্রসেসর দ্বারা চালিত। এটি একটি শক্তিশালী 16GB DDR4 মেমরির সাথে আসে। আরও স্টোরেজ দিতে এবং আপনার কাজের গতি বাড়াতে এই ল্যাপটপে রয়েছে 1TB M.2 NVMe SSD। HP Specter x360 Convertible 14-ea1590TU ইন্টেল আইরিস Xᵉ গ্রাফিক্সের সাথে একীভূত। এতে টাচ সাপোর্ট সহ 13.3-ইঞ্চি ফুল এইচডি ডিসপ্লে রয়েছে। এটি একটি সক্রিয় পেনের সাথেও আসে। আপনার ভিডিও কলের অভিজ্ঞতা বাড়াতে এটিতে একটি HP True Vision 720p ক্যামেরা রয়েছে। এই ল্যাপটপটি 4-সেল, 66 Wh লি-আয়ন পলিমার ব্যাটারি দ্বারা চালিত হয় যা আপনাকে দীর্ঘ সময়ের সমর্থন দেয়। এটি Windows 11 হোম অপারেটিং সিস্টেমে চলে। HP Specter x360 Convertible 14-ea1590TU একটি 2 বছরের HP স্ট্যান্ডার্ড ওয়ারেন্টি সহ আসে।<br></p>',
                'product_thumbnail' => 'uploads/thumb/1748662507695535.jpg',
                'hot_deals' => 1,
                'featured' => 1,
                'special_offer' => 1,
                'special_deals' => 1,
                'status' => 1,
                'created_at' => '2022-11-05 13:22:01',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 10,
                'brand_id' => 15,
                'category_id' => 6,
                'subcategory_id' => 6,
                'subsubcategory_id' => 7,
                'product_name_en' => 'Asus ROG Strix XG43UQ',
                'product_name_bn' => 'আসুস রগ XG43UQ',
                'product_slug_en' => 'asus rog strix xg43uq',
                'product_slug_bn' => 'আসুস রগ XG43UQ',
                'product_tags_en' => 'HP',
                'product_tags_bn' => 'আসুস',
                'product_qty' => '10',
                'product_code' => 'Asus XG43UQ',
                'product_size_en' => '43 inch',
                'product_size_bn' => '৪৩ ইন্স',
                'product_color_en' => 'Silver',
                'product_color_bn' => 'সিলভার',
                'selling_price' => '200000',
                'discount_price' => '210000',
            'short_descp_en' => '<table class="table table-bordered" style="box-sizing: border-box; border-collapse: inherit; background-color: rgb(255, 255, 255); width: 435px; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; margin-bottom: 0px !important; border-width: initial !important; border-style: none !important;"><tbody style="box-sizing: border-box; display: block !important;"><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Model: XG43UQ</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important; background: transparent !important;">Screen Size: 43-inch, 4K UHD</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Resolution: 3840×2160</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; background: rgba(232, 234, 255, 0.22); border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Refresh Rate (max): 144Hz</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">I/O Ports: DisplayPort, HDMI, Audio , USB</td></tr></tbody></table>',
            'short_descp_bn' => '<table class="table table-bordered" style="box-sizing: border-box; border-collapse: inherit; background-color: rgb(255, 255, 255); width: 435px; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; margin-bottom: 0px !important; border-width: initial !important; border-style: none !important;"><tbody style="box-sizing: border-box; display: block !important;"><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Model: XG43UQ</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important; background: transparent !important;">Screen Size: 43-inch, 4K UHD</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Resolution: 3840×2160</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; background: rgba(232, 234, 255, 0.22); border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">Refresh Rate (max): 144Hz</td></tr><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0px; line-height: 1.7; vertical-align: middle; border-right-style: solid !important; border-bottom-style: solid !important; border-left-style: solid !important; border-top-width: 0px !important; border-color: rgba(0, 49, 81, 0.11) !important;">I/O Ports: DisplayPort, HDMI, Audio , USB</td></tr></tbody></table>',
            'long_descp_en' => '<p class="MsoNormal"><span style="font-size: 11.5pt; line-height: 115%; font-family: &quot;Trebuchet MS&quot;, &quot;sans-serif&quot;; color: rgb(1, 19, 45); background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Asus ROG Strix
XG43UQ&nbsp;is a&nbsp;43º 4K UHD (3840 x 2160) DSC gaming monitor with a 144 Hz
refresh rate for super-smooth gaming visuals. It delivers&nbsp;4K UHD visuals
and a 1 ms moving picture response time (MPRT) for superfast gaming on a big
screen. Featuring Display Stream Compression (DSC) and AMD FreeSync Premium Pro
technology, Strix XG43UQ enables super smooth 4K 120 Hz gaming on the latest
consoles via HDMI 2.1. Plus, a 90% DCI-P3 color gamut and DisplayHDR 1000
certification ensure true-to-life colors.&nbsp;Here, GameFast Input Technology
minimizes input lag and provides much faster motion delivery from connected
devices to the monitor. The lag-free control heightens the gameplay experience
and gives you an edge against your opponents. the gaming monitor offers a more
immersive big-screen experience without sacrificing the high refresh rate and
variable refresh tech usually only found in smaller panels. Its anti-glare
screen makes it easier to see on-screen content in changing indoor lighting
conditions, providing a better viewing experience when playing video games and
watching movies. This monitor offers a wide selection of connectivity options,
including three HDMI 2.0 inputs and a DisplayPort interface. This monitor also
features Freesync Premium Pro technology that delivers buttery-smooth visuals
with low latency and better brightness and contrast. Freesync Premium Pro
stipulates low-latency processing for both standard and HDR content,
eliminating the input lag typically associated with HDR content, and also it
offers an ultrafast 144Hz&nbsp;refresh rate, ensuring that even the
fastest-paced games played at the highest visual settings remain buttery-smooth
and completely lag-free. This Asus ROG Strix XG43UQ&nbsp;gaming monitor comes
with TUV Rheinland-certified ASUS Ultra-low Blue Light filters to protect eyes
and prevent strain from harmful blue light, with four different filter settings
via the OSD menu or by using the five-way joystick. This exclusive ROG Strix
XG43UQ&nbsp;gaming monitor comes with remote control for brightness, contrast,
and the input signal from a distance. The latest Asus ROG Strix XG43UQ has 03
years of warranty</span><o:p></o:p></p>',
            'long_descp_bn' => '<p>Asus ROG Strix XG43UQ হল একটি 43º 4K UHD (3840 x 2160) DSC গেমিং মনিটর যা সুপার-মসৃণ গেমিং ভিজ্যুয়ালগুলির জন্য 144 Hz রিফ্রেশ রেট সহ। এটি একটি বড় স্ক্রিনে সুপারফাস্ট গেমিংয়ের জন্য 4K UHD ভিজ্যুয়াল এবং 1 ms মুভিং পিকচার রেসপন্স টাইম (MPRT) প্রদান করে। ডিসপ্লে স্ট্রিম কম্প্রেশন (DSC) এবং AMD FreeSync প্রিমিয়াম প্রো প্রযুক্তির বৈশিষ্ট্যযুক্ত, Strix XG43UQ HDMI 2.1 এর মাধ্যমে সর্বশেষ কনসোলগুলিতে সুপার স্মুথ 4K 120 Hz গেমিং সক্ষম করে৷ এছাড়াও, একটি 90% DCI-P3 রঙের স্বরগ্রাম এবং DisplayHDR 1000 সার্টিফিকেশন সত্য-টু-লাইফ রঙ নিশ্চিত করে। এখানে, গেমফাস্ট ইনপুট টেকনোলজি ইনপুট ল্যাগ কমিয়ে দেয় এবং সংযুক্ত ডিভাইস থেকে মনিটরে অনেক দ্রুত গতি সরবরাহ করে। ল্যাগ-ফ্রি কন্ট্রোল গেমপ্লে অভিজ্ঞতা বাড়িয়ে তোলে এবং আপনাকে আপনার প্রতিপক্ষের বিরুদ্ধে একটি প্রান্ত দেয়। গেমিং মনিটর উচ্চ রিফ্রেশ রেট এবং পরিবর্তনশীল রিফ্রেশ টেক সাধারণত শুধুমাত্র ছোট প্যানেলে পাওয়া যায় না ত্যাগ করে আরও নিমগ্ন বড়-স্ক্রীন অভিজ্ঞতা প্রদান করে। এর অ্যান্টি-গ্লেয়ার স্ক্রিন অভ্যন্তরীণ আলোর অবস্থার পরিবর্তনে অন-স্ক্রীন সামগ্রী দেখতে সহজ করে তোলে, ভিডিও গেম খেলা এবং সিনেমা দেখার সময় আরও ভাল দেখার অভিজ্ঞতা প্রদান করে। এই মনিটরটি তিনটি HDMI 2.0 ইনপুট এবং একটি ডিসপ্লেপোর্ট ইন্টারফেস সহ সংযোগের বিকল্পগুলির একটি বিস্তৃত নির্বাচন অফার করে। এই মনিটরটিতে Freesync প্রিমিয়াম প্রো প্রযুক্তিও রয়েছে যা কম লেটেন্সি এবং আরও ভাল উজ্জ্বলতা এবং বৈসাদৃশ্য সহ বাটারি-মসৃণ ভিজ্যুয়াল সরবরাহ করে। Freesync প্রিমিয়াম প্রো স্ট্যান্ডার্ড এবং HDR কন্টেন্ট উভয়ের জন্য কম লেটেন্সি প্রসেসিং নির্ধারণ করে, সাধারণত HDR কন্টেন্টের সাথে যুক্ত ইনপুট ল্যাগ দূর করে, এবং এটি একটি আল্ট্রাফাস্ট 144Hz রিফ্রেশ রেটও অফার করে, এটি নিশ্চিত করে যে এমনকি সর্বোচ্চ ভিজ্যুয়াল সেটিংসে খেলা সবচেয়ে দ্রুতগতির গেমগুলিও থাকবে। বাটারি-মসৃণ এবং সম্পূর্ণরূপে ল্যাগ-মুক্ত। এই Asus ROG Strix XG43UQ গেমিং মনিটরটি TUV Rheinland-প্রত্যয়িত ASUS আল্ট্রা-লো ব্লু লাইট ফিল্টার সহ চোখকে রক্ষা করতে এবং ক্ষতিকারক নীল আলো থেকে স্ট্রেন প্রতিরোধ করতে, চারটি ভিন্ন ফিল্টার সেটিংসের সাথে ওএসডি মেনুর মাধ্যমে বা পাঁচ-মুখী জয়স্টিক ব্যবহার করে। এই একচেটিয়া ROG Strix XG43UQ গেমিং মনিটর উজ্জ্বলতা, বৈসাদৃশ্য, এবং দূর থেকে ইনপুট সংকেতের জন্য রিমোট কন্ট্রোলের সাথে আসে। সর্বশেষ Asus ROG Strix XG43UQ এর 03 বছরের ওয়ারেন্টি রয়েছে<br></p>',
                'product_thumbnail' => 'uploads/thumb/1748828064143706.jpg',
                'hot_deals' => NULL,
                'featured' => 1,
                'special_offer' => 1,
                'special_deals' => 1,
                'status' => 1,
                'created_at' => '2022-11-07 09:13:28',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 11,
                'brand_id' => 15,
                'category_id' => 6,
                'subcategory_id' => 6,
                'subsubcategory_id' => 6,
                'product_name_en' => 'ASUS TUF VG27AC1A',
                'product_name_bn' => 'আসুস টাফ VG27AC1A',
                'product_slug_en' => 'asus tuf vg27ac1a',
                'product_slug_bn' => 'আসুস টাফ VG27AC1A',
                'product_tags_en' => 'HP',
                'product_tags_bn' => 'আসুস',
                'product_qty' => '2',
                'product_code' => 'TUFVG27AC1A',
                'product_size_en' => '27 inch, 23 inch',
                'product_size_bn' => '২৭ ইন্স',
                'product_color_en' => 'Black, Sliver, White, Yellow',
                'product_color_bn' => 'ব্লাক',
                'selling_price' => '50500',
                'discount_price' => '52000',
            'short_descp_en' => '<span style="color: rgb(67, 71, 86); font-family: Manrope, Helvetica, sans-serif; font-size: 13px; letter-spacing: 0.1px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace</span><br>',
            'short_descp_bn' => '<span style="color: rgb(67, 71, 86); font-family: Manrope, Helvetica, sans-serif; font-size: 13px; letter-spacing: 0.1px;">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available. It is also used to temporarily replace</span><br>',
            'long_descp_en' => '<p>The ASUS TUF Gaming VG27AC1A WQHD gaming monitor has a 27-inch IPS display for 170 Hz (overdrive) gaming. ASUS Extreme Low Motion Blur Sync (ELMB Sync) and Nvidia G-Sync compatible, as well as AMD FreeSync Premium technologies, provide buttery-smooth gameplay. Furthermore, it has a 130% RGB color gamut to provide excellent colors and contrast. It includes a reaction speed of 1ms (MPRT) for smooth gameplay and ASUS Extreme Low Motion Blur (ELMB) technology to decrease ghosting and motion blur even further. A KVM switch allows you to operate two linked devices with a single keyboard and mouse. It contains a USB Type-C hub that allows video transmission in DisplayPort signals; it can also function as a USB hub, allowing you to connect your device to wired peripherals in a clutter-free manner.<br></p>',
            'long_descp_bn' => '<p>The ASUS TUF Gaming VG27AC1A WQHD gaming monitor has a 27-inch IPS display for 170 Hz (overdrive) gaming. ASUS Extreme Low Motion Blur Sync (ELMB Sync) and Nvidia G-Sync compatible, as well as AMD FreeSync Premium technologies, provide buttery-smooth gameplay. Furthermore, it has a 130% RGB color gamut to provide excellent colors and contrast. It includes a reaction speed of 1ms (MPRT) for smooth gameplay and ASUS Extreme Low Motion Blur (ELMB) technology to decrease ghosting and motion blur even further. A KVM switch allows you to operate two linked devices with a single keyboard and mouse. It contains a USB Type-C hub that allows video transmission in DisplayPort signals; it can also function as a USB hub, allowing you to connect your device to wired peripherals in a clutter-free manner.<br></p>',
                'product_thumbnail' => 'uploads/thumb/1748828563005258.jpg',
                'hot_deals' => 1,
                'featured' => 1,
                'special_offer' => 1,
                'special_deals' => 1,
                'status' => 1,
                'created_at' => '2022-11-07 09:21:24',
                'updated_at' => '2022-12-26 06:46:23',
            ),
        ));
        
        
    }
}