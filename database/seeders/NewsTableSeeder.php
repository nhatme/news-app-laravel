<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                "category_id" => 2,
                "image" => "uploads/GmUNQHbq2SNmW9IwBCzT7JbIhxOgKS.jpg",
                "title" => "Man Utd bán McTominay sang Serie A",
                "slug" => "man-utd-ban-mctominay-sang-serie-a",
                "content" => "<p>Theo tờ Athletic ngày 25/8, Man Utd sẽ nhận về 33 triệu USD từ Napoli - nhà vô địch Serie A mùa 2022-2023. Hợp đồng giữa Man Utd và McTominay còn hạn đến tháng 6/2025 và điều khoản gia hạn một năm. Nếu không bán và gia hạn, \"Quỷ Đỏ\" có thể mất trắng vào hè năm sau. McTominay là cầu thủ đi lên từ học viện. Do đó, vụ chuyển nhượng sẽ đem lại khoản lợi nhuận lớn, giúp \"Quỷ Đỏ\" tuân thủ tốt hơn Quy tắc tài chính của Ngoại hạng Anh và UEFA.</p><p>Việc bán McTominay cũng giúp Man Utd tạo khoảng trống ngân sách để mua Manuel Ugarte từ PSG. Ban Giám đốc và HLV Erik Ten Hag đánh giá cao khả năng đánh chặn từ xa của Ugarte, người có thể thay lão tướng Casemiro khi cần. Phí chuyển nhượng tiền vệ người Uruguay rơi vào khoảng 50 triệu USD. </p><p>Mùa trước, McTominay ghi 10 bàn trong 43 trận cho Man Utd, đạt thành tích cá nhân tốt nhất sự nghiệp. Tiền vệ 27 tuổi cũng ghi tám bàn quốc tế từ tháng 3/2023, và là cầu thủ ghi bàn duy nhất cho tuyển Scotland tại Euro 2024. </p><p>Tuy nhiên, McTominay yếu trong khâu đánh chặn từ xa. Do đó, khi Casemiro và Kobbie Mainoo chơi tốt, cầu thủ người Scotland luôn phải ngồi ngoài. Hè này, Man Utd đã bán bảy cầu thủ để thu về gần 80 triệu USD. Ngược lại, họ chi 180 triệu để mua về Leny Yoro, Joshua Zirkzee, Matthijs De Ligt và Noussair Mazraoui. </p><p>Ngoài McTominay, Napoli còn đàm phán mua Romelu Lukaku từ Chelsea và Billy Gilmour từ Brighton. Điểm chung của ba cầu thủ này là có thời gian chơi ở Anh, nơi HLV Antonio Conte từng dẫn dắt Chelsea và Tottenham. Mùa trước, Napoli rơi xuống thứ 10 Serie A. Conte gia nhập đội bóng hồi tháng 7 với tham vọng trở lại Top 4.<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 10,
                "created_at" => "2024-08-26 21:00:40",
                "updated_at" => "2024-08-26 21:00:40"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/wNt22tV8RuAk9rjFqVRtCNP4wdA3Lq.jpg",
                "title" => "U22 Việt Nam gọi 27 cầu thủ cho giải giao hữu ở Trung Quốc",
                "slug" => "u22-viet-nam-goi-27-cau-thu-cho-giai-giao-huu-o-trung-quoc",
                "content" => "<p>Các cầu thủ đến từ 10 CLB V-League, ba CLB hạng Nhất và một Trung tâm đào tạo trẻ sẽ tập trung cùng thời điểm với ĐTQG, để chuẩn bị cho Giải giao hữu quốc tế tại Trung Quốc. Thể Công đóng góp nhiều nhất với sáu cầu thủ. Xếp sau là đội hạng Nhất PVF-CAND (4), Trung tâm đào tạo trẻ PVF (3), Hà Nội, Thanh Hóa và HAGL (2). SLNA, Hải Phòng, CLB TP HCM, Nam Định, CAHN, Đà Nẵng, Bà Rịa – Vũng Tàu, Thanh niên TP HCM mỗi đội bóng một người.</p><p>HLV Kim Sang-sik lựa chọn danh sách chủ yếu dựa trên 35 cầu thủ ông từng triệu tập trong đợt hội quân đầu tiên vào ngày 12/8. Tiền vệ Nguyễn Văn Trường, tiền đạo Bùi Vĩ Hào được đôn lên ĐTQG, chuẩn bị cho hai trận giao hữu với Thái Lan và Nga. Những cái tên đáng chú ý còn lại có tiền vệ Khuất Văn Khang, Nguyễn Thái Sơn, tiền đạo Nguyễn Quốc Việt, Nguyễn Đình Bắc.</p><p>Trong khi đó, nhóm cầu thủ U20 cũng vắng mặt nhiều do đang chuẩn bị cho vòng loại U20 châu Á 2025 vào cuối tháng 9. Những gương mặt nổi bật lứa này có Nguyễn Công Phương, Nguyễn Gia Bảo, Nguyễn Bảo Long, Trịnh Long Vũ, Mai Quốc Tú, Nguyễn Mạnh Hưng, Nguyễn Quốc Khánh hay thủ môn Phạm Đình Hải.</p><p>Lực lượng U22 được lựa chọn gồm hầu hết cầu thủ U21 - sinh năm 2003 trở về sau, để chuẩn bị đường dài cho SEA Games 2025 dành cho lứa U22. Trước mắt, đội sẽ tham dự giải giao hữu quốc tế CFA Team 2024 tại Trung Quốc, từ ngày 2/9 đến 10/9. Giải có sự tham dự của ba đội khác là chủ nhà Trung Quốc, Uzbekistan và Malaysia.<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-25 17:44:48",
                "updated_at" => "2024-08-25 17:44:48"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/ynLtBJFhlfwIXjmmMnVHZFxD39xZ0B.webp",
                "title" => "HLV Ancelotti bênh vực Mbappe",
                "slug" => "hlv-ancelotti-benh-vuc-mbappe",
                "content" => "<p>Nhưng sau đó, Mbappe tịt ngòi khi Real hòa Mallorca 1-1 và thắng Valladolid 3-0 tại La Liga. Cả hai trận này, tiền đạo 25 tuổi đều kết hợp với Rodrygo và Vinicius tạo thành bộ ba trên hàng công. </p><p>Sau trận đấu trên sân Bernabeu tối 25/8, Ancelotti phủ nhận việc phải đá trung phong, thay vì chạy cánh trái sở trường, đang hạn chế khả năng đóng góp của Mbappe. \"Tôi không nghĩ như vậy\", HLV người Italy nói. \"Mbappe là tiền đạo thượng hạng, rất nhanh và di chuyển tốt khi không có bóng. Trận này, Mbappe có ba cơ hội. Tôi không nghĩ cậu ấy phải chơi ở cánh trái hay cánh phải, và sớm muộn sẽ ghi bàn\".</p><p>Khi Mbappe mờ nhạt, Real thắng trận đầu tại La Liga mùa này nhờ những ngôi sao khác trên hàng công. Phút 50, Federico Valverde sút từ ngoài vòng cấm chạm vào một cầu thủ Valladolid đổi hướng thành bàn, đưa Real vượt lên. Phút 88, từ đường chuyền dài của Eder Militao, cầu thủ vào thay người Brahim Diaz xâm nhập vòng cấm rồi tâng bóng chéo góc nhân đôi cách biệt. </p><p>Đến phút bù thứ sáu, đến lượt Endrick Felipe - tài năng trẻ vào thay Mbappe từ phút 86 - lập công với cú sút chìm vào góc gần, ấn định chiến thắng 3-0. Theo Ancelotti, Real có màn trình diễn tốt hơn, ở cả tấn công lẫn phòng ngự, so với trận hòa Mallorca cách đây một tuần. Ông ca ngợi Valverde về khả năng dứt điểm tốt từ ngoài vòng cấm, còn Endrick có thể đá tiền đạo cắm và thể hiện phẩm chất với cú sút thành bàn.<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-25 00:06:44",
                "updated_at" => "2024-08-25 00:06:44"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/p9yNrmyAW2oL4Wh9RsStylzbnojtOR.webp",
                "title" => "Mười người Arsenal kiếm được chiến thắng nhọc nhằn trước Palace",
                "slug" => "muoi-nguoi-arsenal-kiem-duoc-chien-thang-nhoc-nhan-truoc-palace",
                "content" => "<p>Mười người Arsenal kiếm được chiến thắng nhọc nhằn trước Palace<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-26 01:41:21",
                "updated_at" => "2024-08-26 01:41:21"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/hraUVAXKeZWHJgaJfng3xaX04PA7ur.jpg",
                "title" => "Xung đột giữa các liên đoàn billiards thế giới khó hàn gắn",
                "slug" => "xung-dot-giua-cac-lien-doan-billiards-the-gioi-kho-han-gan",
                "content" => "Xung đột giữa các liên đoàn billiards thế giới khó hàn gắn', 'xung-dot-giua-cac-lien-doan-billiards-the-gioi-kho-han-gan', '<p>Ngày 30/7, Liên đoàn Billiards &amp; Snooker Việt Nam (VBSF) cho biết các thành viên bị cấm tham dự các giải của Liên đoàn Billiards châu Á (ACBS), Liên đoàn pool thế giới (WPA) và Liên đoàn Billiards và Snooker quốc tế (ISBF) trong sáu tháng, từ 13/7/2024 đến 12/1/2025. </p><p>Lý do được đưa ra là Việt Nam đã tổ chức Giải pool Hà Nội Open vào tháng 10/2023. Giải đấu không được ACBS cấp phép, do thuộc hệ thống World Nineball Tour (WNT) của Matchroom Pool – một tổ chức đối lập với WPA. Lệnh cấm cũng được cho nhắm vào Giải carom 3 băng Hà Nội Open vào tháng 8/2024, do thuộc Hiệp hội Billiards chuyên nghiệp (PBA) – một tổ chức đối lập với ACBS và Liên đoàn carom 3 băng thế giới (UMB).</p><p>Về luật, PBA không cấm các VĐV đã ký hợp đồng tham dự các giải của UMB, nhưng UMB thì ngược lại. Dù vậy, nhiều VĐV vẫn quyết định rời UMB để đầu quân cho PBA, như Việt Nam có Nguyễn Quốc Nguyện, Ngô Đình Nại, Mã Minh Cẩm, Nguyễn Huỳnh Phương Linh. Quốc Nguyện thấu hiểu luật cấm của UMB, vì chỉ khi các thành viên tuân thủ quy định thì hiệp hội mới có thể duy trì và phát triển. Tuy nhiên, VĐV sinh năm 1982 cũng mong rằng các hiệp hội như PBA hay UMB có thể tìm được tiếng nói chung, để xoá bỏ lệnh cấm hoặc giảm bớt mức độ, để phát triển hơn nữa môn thể thao. \"Tôi mong một ngày có thể tiếp tục đại diện cho Việt Nam thi đấu\", Quốc Nguyện cho hay. \"Tôi muốn được cùng anh em, đồng đội cũ giương cờ Việt Nam, hát quốc ca\".<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-26 13:06:36",
                "updated_at" => "2024-08-26 13:06:36"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/hraUVAXKeZWHJgaJfng3xaX04PA7ur.jpg",
                "title" => "Xung đột giữa các liên đoàn billiards thế giới khó hàn gắn",
                "slug" => "xung-dot-giua-cac-lien-doan-billiards-the-gioi-kho-han-gan",
                "content" => "Xung đột giữa các liên đoàn billiards thế giới khó hàn gắn', 'xung-dot-giua-cac-lien-doan-billiards-the-gioi-kho-han-gan', '<p>Ngày 30/7, Liên đoàn Billiards &amp; Snooker Việt Nam (VBSF) cho biết các thành viên bị cấm tham dự các giải của Liên đoàn Billiards châu Á (ACBS), Liên đoàn pool thế giới (WPA) và Liên đoàn Billiards và Snooker quốc tế (ISBF) trong sáu tháng, từ 13/7/2024 đến 12/1/2025. </p><p>Lý do được đưa ra là Việt Nam đã tổ chức Giải pool Hà Nội Open vào tháng 10/2023. Giải đấu không được ACBS cấp phép, do thuộc hệ thống World Nineball Tour (WNT) của Matchroom Pool – một tổ chức đối lập với WPA. Lệnh cấm cũng được cho nhắm vào Giải carom 3 băng Hà Nội Open vào tháng 8/2024, do thuộc Hiệp hội Billiards chuyên nghiệp (PBA) – một tổ chức đối lập với ACBS và Liên đoàn carom 3 băng thế giới (UMB).</p><p>Về luật, PBA không cấm các VĐV đã ký hợp đồng tham dự các giải của UMB, nhưng UMB thì ngược lại. Dù vậy, nhiều VĐV vẫn quyết định rời UMB để đầu quân cho PBA, như Việt Nam có Nguyễn Quốc Nguyện, Ngô Đình Nại, Mã Minh Cẩm, Nguyễn Huỳnh Phương Linh. Quốc Nguyện thấu hiểu luật cấm của UMB, vì chỉ khi các thành viên tuân thủ quy định thì hiệp hội mới có thể duy trì và phát triển. Tuy nhiên, VĐV sinh năm 1982 cũng mong rằng các hiệp hội như PBA hay UMB có thể tìm được tiếng nói chung, để xoá bỏ lệnh cấm hoặc giảm bớt mức độ, để phát triển hơn nữa môn thể thao. \"Tôi mong một ngày có thể tiếp tục đại diện cho Việt Nam thi đấu\", Quốc Nguyện cho hay. \"Tôi muốn được cùng anh em, đồng đội cũ giương cờ Việt Nam, hát quốc ca\".<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-26 21:06:55",
                "updated_at" => "2024-08-26 21:06:55"
            ],
            [
                "category_id" => 2,
                "image" => "uploads/6MYK4wLFgsn4XW9dX3o4iGtxDfx3AH.jpg",
                "title" => "Barca từ chối Neymar",
                "slug" => "barca-tu-choi-neymar",
                "content" => "<p>Neymar từng khoác áo Barca giai đoạn 2013-2017. Anh ghi 105 bàn qua 186 trận, đoạt hai La Liga, ba Cup Nhà Vua, một Siêu Cup Tây Ban Nha, một Champions League và một FIFA Club World Cup. Hè 2017, Neymar trở thành cầu thủ đắt giá nhất trong lịch sử khi gia nhập PSG với giá 263 triệu USD. Tại Pháp, tiền đạo Brazil ghi 118 bàn và kiến tạo 77 bàn, giành năm Ligue 1, ba Cup Pháp, hai Cup Liên đoàn Pháp và ba Siêu Cup Pháp, cùng vị trí Á quân Champions League 2019-2020. </p><p>Neymar ký hợp đồng hai năm với Al Hilal từ tháng 8/2023. CLB Arab Saudi đã phải trả cho PSG 98 triệu USD phí chuyển nhượng và cho Neymar lĩnh lương 200 triệu mỗi năm. Tuy nhiên, tiền đạo 32 tuổi mới chơi năm trận và ghi một bàn. Neymar từng nhiều lần ngỏ ý trở lại Barca. Năm 2020, Barca - khi đó dưới quyền chủ tịch Josep Bartomeu - ra đề nghị 123 triệu USD cho Neymar, đồng thời để Jean Clair Todibo, Ivan Rakitic và Ousmane Dembele khoác áo PSG theo diện cho mượn. </p><p>PSG được cho muốn 145 triệu USD tiền chuyển nhượng, khiến thương vụ đổ bể. Hè 2023, khi Messi từ chối trở lại Barca để sang Mỹ khoác áo Inter Miami, Neymar cũng liên hệ với Chủ tịch đương nhiệm Joan Laporta. Nhưng thương vụ cũng không được thông qua. Hè này, Barca đã tuyển mộ một ngôi sao tấn công là Dani Olmo với giá 60 triệu USD từ Leipzig. Nhưng do vi phạm quỹ lương trần của La Liga, nhà vô địch Euro 2024 chưa được đăng ký, phải ngồi ngoài cả hai lượt đầu La Liga khi Barca lần lượt thắng Valencia và Bilbao với cùng tỷ số 2-1.<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 12,
                "created_at" => "2024-08-26 20:55:41",
                "updated_at" => "2024-08-26 20:55:41"
            ],
            [
                "category_id" => 3,
                "image" => "uploads/1WKOr9fFDYGcN84vygU12bWTR2gtEk.jpg",
                "title" => "Hoa hậu Khánh Vân công khai chồng sắp cưới",
                "slug" => "hoa-hau-khanh-van-cong-khai-chong-sap-cuoi",
                "content" => "<p>Neymar từng khoác áo Barca giai đoạn 2013-2017. Anh ghi 105 bàn qua 186 trận, đoạt hai La Liga, ba Cup Nhà Vua, một Siêu Cup Tây Ban Nha, một Champions League và một FIFA Club World Cup. Hè 2017, Neymar trở thành cầu thủ đắt giá nhất trong lịch sử khi gia nhập PSG với giá 263 triệu USD. Tại Pháp, tiền đạo Brazil ghi 118 bàn và kiến tạo 77 bàn, giành năm Ligue 1, ba Cup Pháp, hai Cup Liên đoàn Pháp và ba Siêu Cup Pháp, cùng vị trí Á quân Champions League 2019-2020. </p><p>Neymar ký hợp đồng hai năm với Al Hilal từ tháng 8/2023. CLB Arab Saudi đã phải trả cho PSG 98 triệu USD phí chuyển nhượng và cho Neymar lĩnh lương 200 triệu mỗi năm. Tuy nhiên, tiền đạo 32 tuổi mới chơi năm trận và ghi một bàn. Neymar từng nhiều lần ngỏ ý trở lại Barca. Năm 2020, Barca - khi đó dưới quyền chủ tịch Josep Bartomeu - ra đề nghị 123 triệu USD cho Neymar, đồng thời để Jean Clair Todibo, Ivan Rakitic và Ousmane Dembele khoác áo PSG theo diện cho mượn. </p><p>PSG được cho muốn 145 triệu USD tiền chuyển nhượng, khiến thương vụ đổ bể. Hè 2023, khi Messi từ chối trở lại Barca để sang Mỹ khoác áo Inter Miami, Neymar cũng liên hệ với Chủ tịch đương nhiệm Joan Laporta. Nhưng thương vụ cũng không được thông qua. Hè này, Barca đã tuyển mộ một ngôi sao tấn công là Dani Olmo với giá 60 triệu USD từ Leipzig. Nhưng do vi phạm quỹ lương trần của La Liga, nhà vô địch Euro 2024 chưa được đăng ký, phải ngồi ngoài cả hai lượt đầu La Liga khi Barca lần lượt thắng Valencia và Bilbao với cùng tỷ số 2-1.<br></p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 1200,
                "created_at" => "2024-08-26 21:02:53",
                "updated_at" => "2024-08-26 21:02:53"
            ],
            [
                "category_id" => 3,
                "image" => "uploads/ZWYB3HWsQ8uSBnuwvr3ikEci3iMW2Y.jpg",
                "title" => "Italy điều tra nghi vấn ngộ sát trong vụ chìm du thuyền chở tỷ phú Anh",
                "slug" => "italy-dieu-tra-nghi-van-ngo-sat-trong-vu-chim-du-thuyen-cho-ty-phu-anh",
                "content" => "<p>Cartosio cho biết nhóm của ông sẽ xem xét cẩn thận trách nhiệm của từng bên, như thuyền trưởng du thuyền Bayesian, các thành viên thủy thủ đoàn, những cá nhân phụ trách giám sát, nhà sản xuất và những người liên quan khác. \"Theo tôi, có khả năng đã xảy ra hành vi phạm tội, đây có thể là một vụ ngộ sát, nhưng chúng tôi chỉ xác định được điều đó khi có thời gian điều tra thêm\", ông nói. Du thuyền Bayesian dài 56 m, treo cờ Anh, bị chìm trong thời tiết xấu khi đang neo đậu gần làng chài Porticello phía đông đảo Sicily hôm 19/8. </p><p>Du thuyền lúc bấy giờ chở 10 thành viên thủy thủ đoàn và 12 hành khách, phần lớn là công dân Anh. Sự cố khiến 7 người thiệt mạng, trong đó có tỷ phú công nghệ Anh Mike Lynch cùng con gái. Câu hỏi chính mà các nhà điều tra đang tập trung lúc này là tại sao một thuyền buồm được nhà sản xuất Perini Navi của Italy coi là \"không thể chìm\" lại bị chìm, trong khi một chiếc thuyền buồm treo cờ Hà Lan neo đậu gần đó hầu như không hư hại. Cơ quan điều tra cũng đặt câu hỏi về việc vì sao gần như toàn bộ thủy thủ đoàn thoát chết, ngoại trừ đầu bếp, trong khi 6 hành khách bị mắc kẹt. </p><p>Giới chức địa phương xác nhận hầu hết thi thể được tìm thấy đều ở cùng một vị trí trên du thuyền, phía bên trái và gần bề mặt hơn. Phó công tố viên Raffaele Cammarano cho biết nhiều khả năng tai nạn xảy ra khi các hành khách đang ngủ và một trong những trọng tâm của cuộc điều tra là xác định xem họ có được ai đó cảnh báo hay không.</p>",
                "is_breaking_news" => 1,
                "is_approved" => 1,
                "status" => 1,
                "views" => 3500,
                "created_at" => "2024-08-25 17:38:26",
                "updated_at" => "2024-08-25 17:38:26"
            ],
        ]);
    }
}
