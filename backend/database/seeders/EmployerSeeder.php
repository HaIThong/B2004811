<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employers')->insert([
            [
                'id' => 5,
                'user_id' => 5,
                'name' => 'TECHCOMBANK',
                'address' => 'HO Miền Bắc: Số 6 Quang Trung, phường Trần Hưng Đạo, Quận Hoàn Kiếm, Thành phố Hà Nội
                HO Miền Nam: Số 23 Lê Duẩn, phường Bến Nghé, Quận 1, Thành phố Hồ Chí Minh',
                'min_employees' => 10,
                'max_employees' => 150,
                'contact_name' => 'Khối Quản Trị Nguồn Nhân Lực',
                'phone' => '0333333331',
                'website' => 'https://techcombank.com/',
                'description' => 'Lĩnh vực kinh doanh là viễn thông và các dịch vụ Giá trị gia tăng. Với tiêu chí hàng đầu là coi trọng giá trị nguồn nhân lực, công ty luôn hướng tới việc tạo điều kiện làm việc tốt nhất cho nhân viên để phát huy hết khả năng, tạo ra giá trị lớn cho công ty. Từ đó công ty có sự hỗ trợ trở lại đối với nhân viên.',
                'logo' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/453076304_910349481138219_1377419910091349711_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHuGTWhlsosjg1fdM-gHhll54Ck1mGvdA7ngKTWYa90DmR_9FqMKnhkDRE51clX6b3RJEYKEyr2cANwihYl38ju&_nc_ohc=AA2ccb1Dap4Q7kNvgH9osZP&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=AGLLmnCBwgDTzK-9rqBfGff&oh=00_AYC4h0ovcdhP89JwXYC8KcbKQ_1la9RDgRpWnHCq-ERq8A&oe=670CFEDB',
                'image' => 'https://scontent.fsgn5-9.fna.fbcdn.net/v/t39.30808-6/453073481_910349834471517_5151969826990135376_n.jpg?stp=dst-jpg_s960x960&_nc_cat=105&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeEBCF0Evjh8KpG9AX8wnGRCPvOSwo7Ep-4-85LCjsSn7hrII8OOOqwCg14MkzH3lTO5mULIvZw6QYxI32_AsJKO&_nc_ohc=QndY22AL8jwQ7kNvgF6iTVN&_nc_ht=scontent.fsgn5-9.fna&_nc_gid=AVGuhnK3fQ5_DnJxGK-co_7&oh=00_AYB9tN9C2rgCvbYQiCnQXe8bHWqZopLSDxoo44ZGoScTSA&oe=670CF54B',
                'is_hot' => 1,
                'is_active' => 1
            ],

            [
                'id' => 8,
                'user_id' => 8,
                'name' => 'Tổng Công ty Cổ phần Công trình Viettel',
                'address' => 'Tòa Báo Lao động, Số 6, đường Phạm Văn Bạch, Cầu Giấy, Hà Nội',
                'min_employees' => 5000,
                'max_employees' => 9999,
                'contact_name' => 'Ms.Phương',
                'phone' => '0333333332',
                'website' => 'https://viettelconstruction.com.vn/',
                'description' => 'Tổng Công ty CP Công trình Viettel hoạt động kinh doanh với 6 trụ chính: Đầu tư Hạ tầng, Xây dựng (bao gồm xây dựng hạ tầng viễn thông, xây dựng dân dụng B2C và B2B), Công nghệ thông tin, Giải pháp Tích hợp, Dịch vụ Kỹ thuật và Vận hành Khai thác. Tổng Công ty tâm đắc mang trong mình sứ mệnh đồng hành “Dựng Xây Cuộc Sống Mới” cùng các doanh nghiệp trên cả nước và thế giới.',
                'logo' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/452929871_887597603393738_4268494304776993496_n.jpg?_nc_cat=1&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEBLrP_OGwBtnr9wjvbrCjzDjphcA0H5C4OOmFwDQfkLqaz4r2BrEmqFoAVca1gJA52xYQH5EVhsOr0NdW95xKo&_nc_ohc=JmF5NLoTAD8Q7kNvgH4pB4D&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=AID4AQSQfMka4ue5r13h3ob&oh=00_AYCNdyjhXH25F9x9ok2cT-3Mh7H_mAvgYT-tVKFG24AOIA&oe=670D0015',
                'image' => 'https://scontent.fsgn5-5.fna.fbcdn.net/v/t39.30808-6/441517132_847008504119315_8766742093744168620_n.png?stp=dst-png_s960x960&_nc_cat=100&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeF3Dff14d8KApaGC8eKZQoGj7IQ-caIrkKPshD5xoiuQpxfdf1uD15QP9OpG3oCsVhOBUt_qp1onEYD4QjgJ4cJ&_nc_ohc=65Q6KpuFhmIQ7kNvgHCZFnJ&_nc_ht=scontent.fsgn5-5.fna&_nc_gid=A_vtPIx3nlJxCXRn28KeJXj&oh=00_AYDuZwh_T235-zHzw_5Do-bTXuoBqPflf0Fw8gtgAPSY1g&oe=670D201A',
                'is_hot' => 1,
                'is_active' => 1
            ],

            [
                'id' => 9,
                'user_id' => 9,
                'name' => 'Công Ty Cổ Phần Eurowindow',
                'address' => 'Số 02 Tôn Thất Tùng, P. Trung Tự, Q. Đống Đa, Hà Nội',
                'min_employees' => 3000,
                'max_employees' => 0,
                'contact_name' => 'Nguyen Tuan Viet',
                'phone' => '0333333333',
                'website' => 'https://www.eurowindow.biz',
                'description' => 'Công ty CP Eurowindow được thành lập ngày 29/08/2002, Eurowindow là nhà cung cấp các giải pháp tổng thể cửa hàng đầu tại Việt Nam. Eurowindow chuyên sản xuất các loại cửa sổ, cửa đi, vách ngăn bằng vật liệu u-PVC cao cấp, có lõi thép gia cường và hộp kính tiêu chuẩn chất lượng Châu Âu. Các sản phẩm của Eurowindow có nhiều ưu điểm nổi bật hơn hẳn các loại cửa làm từ vật liệu truyền thống như gỗ, nhôm về tính cách âm, cách nhiệt, độ bền, khả năng chịu lực cao và không cong vênh, co ngót. Mặc dù mới xuất hiện khoảng 50 năm trở lại đây, sản phẩm này đã được đánh giá cao và sử dụng rộng rãi tại nhiều nước trên thế giới, không chỉ ở Châu Âu mà còn ở các nước Châu Á như Singapore, Trung Quốc, Thái Lan, Malaysia và hiện nay là Việt Nam. Trọng dụng nhân tài và phát triển nguồn nhân lực luôn là một trong những tiêu chí hàng đầu của chúng tôi. “Eurowindow luôn chào đón các nhân tài . Nếu bạn tự tin và muốn khẳng định khả năng của bản thân trong môi trường làm việc chuyên nghiệp và năng động.” Hãy liên hệ với chúng tôi bất cứ lúc nào !',
                'logo' => 'https://scontent.fsgn5-12.fna.fbcdn.net/v/t39.30808-6/352091370_9500929883311734_1437114113033403236_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGNT8sR4ujwMb_zF5GZ6M-ryy-2dZRqw4PLL7Z1lGrDgyWfvagM_-gqW6tuyHim5D1X_iOtiQQt5wD2ZmCj4-wL&_nc_ohc=dlfcXYRrEVcQ7kNvgGWV-P1&_nc_ht=scontent.fsgn5-12.fna&_nc_gid=AA_21OUXDqwR2yX2hyTvsNc&oh=00_AYDBp7fzFcGs6809e4H53Qq6qe3Szvn5YLx6fUIJWfZAOA&oe=670CECE7',
                'image' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/457059093_1064567948369913_7901210854396538954_n.jpg?stp=dst-jpg_s960x960&_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFKT8ffYwtn0uBSUf7nLV_Mm5K9Wjb01T-bkr1aNvTVP6H06E22ATDAxUMGRW1f1x4z4nTNH1GB1hVSH4EY55dx&_nc_ohc=a2bB5f_Yb_8Q7kNvgGZq_a4&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=AGo2y4cVPTUpZd_USe9EVZE&oh=00_AYAa8DWj5tJraJ4XTKs8CBdWUutUW1kiu8MkuM0Nu6O1Sw&oe=670D150F',
                'is_hot' => 0,
                'is_active' => 1
            ],

            [
                'id' => 10,
                'user_id' => 10,
                'name' => 'CÔNG TY CỔ PHẦN METAWAY HOLDINGS',
                'address' => 'Lô CX01, Khu đô thị Văn Khê, Phường La Khê, Quận Hà Đông, Thành phố Hà Nội, Việt Nam',
                'min_employees' => null,
                'max_employees' => null,
                'contact_name' => 'contact_name4',
                'phone' => '0333333334',
                'website' => 'https://metawayholdings.vn/',
                'description' => 'Metaway Holdings là tập đoàn kinh tế số quy mô toàn cầu với định hướng phát triển trên các lĩnh vực trụ cột của xã hội kinh tế số. Chúng tôi tạo ra các nền tảng để hoàn thiện hệ sinh thái đa giá trị: Chăm sóc sức khỏe số, Giáo dục số, Thương mại số, Ngân hàng số, Bảo hiểm số, Bất động sản số… Tất cả đều dựa trên việc ứng dụng tối ưu các công nghệ tiên tiến để phục vụ tốt hơn nhu cầu kết nối toàn cầu.

            Với định hướng phát triển các lĩnh vực trụ cột của nền kinh tế, hướng tới xã hội số, Metaway Holdings kiến tạo các nền tảng để hình thành nên các trụ cột của nền kinh tế số bao gồm: Y tế số, giáo dục số, thương mại số, ngân hàng số, bảo hiểm số, bất động sản số… dựa trên việc áp dụng tối đa các công nghệ mới nhất để phụng sự và đáp ứng những nhu cầu kết nối của công dân toàn cầu.

            Metaway Holdings sở hữu nguồn lực mạnh mẽ từ con người, tài chính đến công nghệ. Những người sáng lập và đội ngũ điều hành của Metaway Holdings có nhiều năm kinh nghiệm về chiến lược, quản trị doanh nghiệp, đầu tư, tái cấu trúc và am hiểu các công thức thành công bậc nhất trên thế giới.',
                'logo' => 'https://scontent.fsgn5-8.fna.fbcdn.net/v/t39.30808-1/275804608_129834459594589_426323808416477005_n.jpg?stp=dst-jpg_s200x200&_nc_cat=109&ccb=1-7&_nc_sid=f4b9fd&_nc_eui2=AeHRxbvbAQVBpwSh-FE8LOLy0QbKWe3aScnRBspZ7dpJyRE2tLdXD6bDvmPtwSWHvWGk2g4AFrlax3UTNmxFMOoL&_nc_ohc=iAT2bHEhczgQ7kNvgFrXGJO&_nc_ht=scontent.fsgn5-8.fna&_nc_gid=AFeKUYjWqvbcoEnLZBDkFwn&oh=00_AYDe_OKqu6b4h7fdFNc6_iazHDyQcwdRbhvKlRpNvevhBQ&oe=670CF3DF',
                'image' => 'https://scontent.fsgn5-14.fna.fbcdn.net/v/t39.30808-6/393121401_341939381722982_2190932807087561662_n.png?stp=dst-png_s960x960&_nc_cat=101&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeEjO2oC3AkuhlRpjUryS3UStXlHDtcBGRW1eUcO1wEZFRMXoHFG280SoJy6w3NJ0ppf5A38DwIK-ggggRiHDYVy&_nc_ohc=l1v3X_8zSHgQ7kNvgHTaoO9&_nc_ht=scontent.fsgn5-14.fna&_nc_gid=AFeKUYjWqvbcoEnLZBDkFwn&oh=00_AYDZUIQp4OlS-dlcNuZgGcyBpn38UzB0GP9jlvAYRikPXg&oe=670CFC2E',
                'is_hot' => 1,
                'is_active' => 1
            ],

            [
                'id' => 11,
                'user_id' => 11,
                'name' => 'CÔNG TY TNHH COWAY VINA',
                'address' => 'Peakview Tower, 36 Hoàng Cầu, Ô Chợ Dừa, Đồng Đa, Hà Nội',
                'min_employees' => 100,
                'max_employees' => 499,
                'contact_name' => 'contact_name1',
                'phone' => '0333333331',
                'website' => 'http://cowayvina.com.vn',
                'description' => 'Coway Việt Nam là pháp nhân tại Việt Nam của công ty Coway có trụ sở tại Hàn Quốc. Chúng tôi chính thức vào thị trường Việt Nam năm 2020 với tư cách pháp nhân độc lập. Sản phẩm chủ đạo của chúng tôi là máy lọc nước và máy lọc không khí thương hiệu số 1 Hàn Quốc. Chúng tôi tự hào đóng góp phần lớn vào việc đem lại chất lượng cuộc sống trong sạch, bảo vệ sức khỏe người dùng. Chất lượng máy lọc nước và máy lọc không khí Coway đã được chứng nhận bằng việc sản phẩm Coway chiếm thị phần số 1 Hàn Quốc và Malaysia.

            Để đáp ứng nhu cầu mở rộng kinh doanh, Coway Vina cần tuyển dụng rất nhiều vị trí hấp dẫn. Coway Vina cam kết đem lại môi trường làm việc chuyên nghiệp và thân thiện cho nhân viên',
                'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRZaIsiYBNm1NiqQBZ5H_MBcK9bXkCtnJ1tw&s',
                'image' => 'https://scontent.fsgn5-9.fna.fbcdn.net/v/t39.30808-6/407686690_698968132330630_4746301613222761101_n.jpg?stp=dst-jpg_s960x960&_nc_cat=102&ccb=1-7&_nc_sid=2285d6&_nc_eui2=AeEuWmxbxnmdsHcC66uA2tyqld_zRQld7weV3_NFCV3vB7sOoBlhIO_ti_y6M8qglk1NBVSFIK3VQu8Fy77GlwKc&_nc_ohc=ADYT7ozYYcIQ7kNvgFRT8qA&_nc_ht=scontent.fsgn5-9.fna&_nc_gid=ARuaExNP-Kcy_CLRvZAt-WA&oh=00_AYDZJD6jK295gErYWsRvphvyK-U4x4-l0Gsk5LPsmvOafA&oe=670D1026',
                'is_hot' => 1,
                'is_active' => 1
            ],

            [
                'id' => 12,
                'user_id' => 12,
                'name' => 'CÔNG TY CỔ PHẦN VISCOM',
                'address' => '62 Nguyễn Trường Tộ, Phường 13, Quận 4, TP. HCM',
                'min_employees' => null,
                'max_employees' => null,
                'contact_name' => 'Ms. Đông',
                'phone' => '0333333336',
                'website' => 'http://www.viscom.vn',
                'description' => 'Được thành lập và điều hành bởi những người đam mê và giàu kinh nghiệm về CNTT và Viễn thông nhưng Viscom vẫn liên tục cải tiến, đổi mới để tăng sức cạnh tranh và phục vụ Khách hàng và người tiêu dùng ngày càng tốt hơn. Viscom là Công ty tiên phong trong việc thực hiện chính sách bảo hành đổi ngay cho người tiêu dùng cho rất nhiều dòng sản phẩm. Được Khách hàng và người tiêu dùng đánh giá rất cao.

            Đến nay Viscom đã có chặng đường 16 năm kinh nghiệm. Hiện nay chúng tôi đã có hơn 1.000 Đại lý bán lẻ, các siêu thị điện máy, máy tính, các Công ty máy tính thương hiệu, các Công ty dự án, các Công ty Viễn thông. Hệ thống Đại lý có mặt trên 63 tỉnh thành tại Việt Nam.

            Sản phẩm mà Viscom đang phân phối đều là các hãng nổi tiếng và đã khẳng định được vị thế trên thị trường thế giới - một yêu cầu đầu tiên trong việc chọn sản phẩm phù hợp để cung cấp cho thị trường Việt Nam.',
                'logo' => 'https://scontent.fsgn5-5.fna.fbcdn.net/v/t39.30808-1/432739386_809190687914012_6415738390468439886_n.jpg?stp=dst-jpg_s200x200&_nc_cat=108&ccb=1-7&_nc_sid=f4b9fd&_nc_eui2=AeGtJQC2KoWAXMLKDzfswnLigwNpSAvxWpuDA2lIC_Fam162kjN9yzYHS9RawX4XqOL9inDG1-4LnYfVc1iAw2L5&_nc_ohc=fsERL0UBX4sQ7kNvgFMG5nW&_nc_ht=scontent.fsgn5-5.fna&_nc_gid=AepT-WZBbSu8j1-4fYlhWzO&oh=00_AYAJdFQFRNP63NWSIdVuWV2dtQF0NVSo04SZgSi6V9kdLA&oe=670D0EE1',
                'image' => 'https://scontent.fsgn5-14.fna.fbcdn.net/v/t39.30808-6/319400557_1288941301888266_7768613782940177326_n.jpg?stp=dst-jpg_s960x960&_nc_cat=106&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeGXoki14WHUaEgGySrgsQ_zsb3Qi8u8rWmxvdCLy7ytafLQQKDUz5Oj2RLB_XjYmOw2IkpOocpzqc2fDoTgQheN&_nc_ohc=L1eSkAg6VGwQ7kNvgGN_GPQ&_nc_ht=scontent.fsgn5-14.fna&_nc_gid=AepT-WZBbSu8j1-4fYlhWzO&oh=00_AYBzhKl5vX6zp90pFgI5FJD3ESxnyBJQ8KukqbCgMp7sVw&oe=670D011F',
                'is_hot' => 0,
                'is_active' => 1
            ],

            [
                'id' => 13,
                'user_id' => 13,
                'name' => 'Tổng Công Ty Chuyển Phát Nhanh Bưu Điện',
                'address' => 'Tầng 4, tòa nhà FLC Landmark Tower, Ngõ 5 Lê Đức Thọ, Mỹ Đình 2, Nam Từ Liêm',
                'min_employees' => 1000,
                'max_employees' => 4999,
                'contact_name' => 'Bùi Tuấn Nghĩa',
                'phone' => '0333333337',
                'website' => 'http://ems.com.vn/',
                'description' => 'Tổng công ty Chuyển phát nhanh Bưu điện - CTCP đã được thành lập vào ngày 24/01/2005. Với gần 2.300 CBCNV tại Hà Nội, Đà Nẵng, TP. Hồ Chí Minh và các nhân viên kinh doanh tại một số thị trường trọng điểm trên toàn mạng lưới, Tổng công ty đã xây dựng được nguồn nhân lực chất lượng cao, tinh thông nghiệp vụ, giàu kinh nghiệm và nhiệt huyết với nghề.',
                'logo' => 'https://scontent.fsgn5-3.fna.fbcdn.net/v/t39.30808-6/461943000_843911874494648_4444743370094689010_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHr4FRpMoqmjzckwXbwmP14IPVzMjtNTncg9XMyO01Od6zM9XyeGygCsMac7mb_RmhMNJRcgBdQ5BLtyMyYe6xX&_nc_ohc=soFWAbTJXJ4Q7kNvgFbfkBY&_nc_ht=scontent.fsgn5-3.fna&_nc_gid=AVwjmw7u060S9XxnN5pFbBS&oh=00_AYBhKupbzxHkvOBPL-bNr7WrfTY3RA5jz1-aukbxeguzNw&oe=670CEF15',
                'image' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/460761349_835330368686132_75450351087841275_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeGhiy_uhlqN0gBm3UCtA2NxJ-XUH1dw3yEn5dQfV3DfIcV8WEYTIkATB0zhX1_7qGPJ-ZUgUZ5jsLrvVxDfJTy1&_nc_ohc=tR-vPEDZYqYQ7kNvgE4ooaM&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=ABQJ3wv4SMfNV5-RhfpAa4p&oh=00_AYCsPLYeKRfiT21aje80lkIZ4W_52kUca5X9ocoR3cAyIQ&oe=670D1EB3',
                'is_hot' => 0,
                'is_active' => 1
            ],

            [
                'id' => 14,
                'user_id' => 14,
                'name' => 'CÔNG TY TNHH INFOPLUS',
                'address' => 'Tầng 17, Tòa nhà IDMC Mỹ Đình, số 15 Phạm Hùng, Phường Mỹ Đình 2, Quận Nam Từ Liêm, TP. Hà Nội',
                'min_employees' => 100,
                'max_employees' => 499,
                'contact_name' => 'Ms.Dương',
                'phone' => '0333333338',
                'website' => 'https://infoplusvn.com/',
                'description' => 'Infoplus is a financial API specialist company that supports automated financial services.
            Based on Vietnam\'s first automatic financial system, We provide an automated banking service to connect with companies and individuals.
            We are creating financial innovation in Vietnam\'s digital economy through specialized financial IT technology.

            Our Strength:
            1. Experts Group:
            -   The experts’ group with more than 15years of IT experience in the financial field
            -   Support optimized financial API services for consumer financial business
            2. Services:
            -   Support customized Fintech services such as ERP and BMS to e-commerce, e wallet, and Tel corp. with a customer financial database.',
                'logo' => 'https://scontent.fsgn5-15.fna.fbcdn.net/v/t39.30808-1/453147684_1064391478814742_5001862379044531548_n.jpg?stp=dst-jpg_s200x200&_nc_cat=111&ccb=1-7&_nc_sid=f4b9fd&_nc_eui2=AeF2jStyCRBIUx14qcWaBw6D0v-na8xdnVHS_6drzF2dUe4KlL1zdQ0osdApTUwC5Hq52jq7iHAZXD7vGH55u8Gn&_nc_ohc=z_p6QwGPKbIQ7kNvgH1HuVX&_nc_ht=scontent.fsgn5-15.fna&_nc_gid=A1tv4T56d6J68_0eXetZFGV&oh=00_AYAtAi2wWAG_hBTnKDJdHkZbP6qnhkHj8peqU9XINmJGDg&oe=670CEFF9',
                'image' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/438805154_994320632488494_7667824555478310488_n.jpg?stp=dst-jpg_s960x960&_nc_cat=107&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeGtxyIIv6P6-kgnNMNCAIv494eYh0IVsB73h5iHQhWwHupthldqak7QwIvKvsy_FmSoEu3zQKW91mzCG5epV79b&_nc_ohc=cLvuYJ1G-YMQ7kNvgGiyauG&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=A1tv4T56d6J68_0eXetZFGV&oh=00_AYAl5A6S_UG_aI4vJDKEd-YxLaDSiMqwdO66ymyfLg08Yw&oe=670D07DD',
                'is_hot' => 1,
                'is_active' => 1
            ],

            [
                'id' => 15,
                'user_id' => 15,
                'name' => 'Ngân Hàng TMCP Quân Đội',
                'address' => 'MB Tower, 18 Lê Văn Lương, Trung Hòa, Cầu Giấy, Hà Nội',
                'min_employees' => null,
                'max_employees' => null,
                'contact_name' => 'Phòng tuyển dụng',
                'phone' => '0333333339',
                'website' => 'https://www.mbbank.com.vn/',
                'description' => 'MB là một định chế vững về tài chính, mạnh về quản lý, minh bạch về thông tin, thuận tiện và tiên phong trong cung cấp dịch vụ để thực hiện được sứ mệnh của mình, là một tổ chức, một đối tác Vững vàng, tin cậy.

            Trong suốt quá trình hình thành và phát triển, dưới sự lãnh đạo, chỉ đạo của Quân ủy Trung ương - Bộ Quốc phòng, Ngân hàng nhà nước và sự hỗ trợ, giúp đỡ tận tình của các cơ quan hữu quan; đơn vị trong và ngoài quân đội; Ngân hàng TMCP Quân Đội (MB) đã phát huy bản chất tốt đẹp và truyền thống vẻ vang của người chiến sỹ trên mặt trận kinh tế; đoàn kết, chủ động, sáng tạo, tự lực, tự cường, khắc phục khó khăn, cải tiến chất lượng hoạt động đưa các sản phẩm dịch vụ Ngân hàng tốt nhất đến với các cá nhân, tổ chức kinh tế, các doanh nghiệp trên khắp các tỉnh, thành trọng điểm của cả nước, góp phần đẩy mạnh công cuộc phát triển kinh tế của Việt Nam nói chung và nâng cao hiệu quả kinh doanh của ngành Ngân hàng nói riêng.',
                'logo' => 'https://cdn2.fptshop.com.vn/unsafe/Uploads/images/tin-tuc/177929/Originals/app-mb-bi-loi-1.png',
                'image' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/460503543_1058973049097369_6082329470280099766_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=2285d6&_nc_eui2=AeEY9U0w_t4vO7Ps3JTJMfoMmTXpkz4Oc3CZNemTPg5zcET1T6KiJRiTHcnuv35XF2_Ilxo2r-C6l8eyCQRgkcfy&_nc_ohc=kK9exJ9le1kQ7kNvgGSgOrG&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=AP8q2kwTExVN8USvIV_H1R2&oh=00_AYA04CwvjXl-Mdq7FYxWt_YlCnVYRcifm0C9PEMDFxCLWw&oe=670D0478',
                'is_hot' => 0,
                'is_active' => 1
            ],

            [
                'id' => 16,
                'user_id' => 16,
                'name' => 'CÔNG TY CỔ PHẦN CÔNG NGHỆ CITEK',
                'address' => 'Số 2 Hồng Hà, Phường 2, Quận Tân Bình, Thành phố Hồ Chí Minh, Việt Nam',
                'min_employees' => null,
                'max_employees' => null,
                'contact_name' => 'Ms.Uyên',
                'phone' => '0333333310',
                'website' => 'https://www.citek.vn/',
                'description' => 'Citek Technology JSC is an enterprise that consults and deploys many comprehensive sets of digital transformation solutions ERP (SAP & Oracle Netsuite), MES, Data Collection, CRM, Data warehouse, Business planning, Business Intelligence as well as develops Web applications and Mobile applications.

            We have been trusted by global companies and leading domestic companies such as Hoa Phat Group, Cadivi Power Cable, Eurowindow, Gelex Electric, Hoa Binh Minh Group, Phenikaa Group, Vicostone, Group THP Group, Quan Dat, BIO, VAS Steel, Minh Phu Seafood, Hainan Seafood, Rang Dong Plastic, SMC Steel, Ton Nam Kim, Nanogen Pharmaceutical, Mainetti, Gia Hoa, PVCFC, Big C, Novaland, Diana-Uncharm, Maison, United Paint Group, Nippon Paint, Honda Vietnam, Mitsubishi Electric, Ajinomoto, BSI, Puratos, Clariant, Relats, Cho Lon Electronics, Fulbright University, Adidas.

            With important contributions in the field of Digital Transformation, recently, Citek has been honored at TOP 10 VIETNAM IT ENTERPRISE Awards 2021 and SAO KHUE Awards 2021. Besides, Citek is also the only partner in Vietnam which was honored by SAP as SAP S/4HANA Partner of The Year 2020, SAP Asia Pacific\'s fastest growing partner in 2019.',
                'logo' => 'https://scontent.fsgn5-14.fna.fbcdn.net/v/t39.30808-6/305083881_482010790600118_2526586321000075895_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFycpDSkjwmxlTrfM0EYkGhVZqK-4V4kMZVmor7hXiQxvlnzH5KOV6bQs4-hMmQdy5TmbTB8cx9IvIXcpt32Gva&_nc_ohc=s0v7KTrmCjQQ7kNvgGMfpVg&_nc_ht=scontent.fsgn5-14.fna&_nc_gid=A-yLqgEMq26C7OLcBfzAxQ4&oh=00_AYBTIMdCrP53i00OOC2SdJLvAGi9S_MMvnAdQAcowwaE_Q&oe=670CF11A',
                'image' => 'https://scontent.fsgn5-10.fna.fbcdn.net/v/t39.30808-6/362232742_744176341050227_2898136472863915172_n.jpg?stp=dst-jpg_s960x960&_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFwpRQNi5bEu8eLuy1N7vUH3Hu2rThSzFDce7atOFLMUBUXfijxjjqzsqzk-L6ntva45gPJBWhF4QR8Jdb1KUOB&_nc_ohc=VV87dYOWHXkQ7kNvgEam-Bh&_nc_ht=scontent.fsgn5-10.fna&_nc_gid=AgXnITksfpmSYqN4LrznUKV&oh=00_AYBpjjNjrIks8hC9T6QmZ09XzgrJ3GQsDlrynCjCmxe_KQ&oe=670CF67C',
                'is_hot' => 0,
                'is_active' => 1
            ],

        ]);
    }
}
