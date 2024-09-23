# BTTH-6
---------------------------------------------------------------------------------------------------------------------------------------
Họ tên thành viên: 
  - Trần Minh Hiền
  - Trần Công Đạt
  - Phạm Minh Phương
---------------------------------------------------------------------------------------------------------------------------------------
Mô Tả Hệ Thống Quản Lý Thông Tin Dân Cư Chung Cư
1. Mô Tả Nghiệp Vụ
Ban quản lý của một chung cư cần xây dựng một phần mềm để quản lý thông tin dân cư và các tổ dân cư. Trong chung cư, dân cư bao gồm nhiều nhóm đối tượng khác nhau như các hộ gia đình có hộ khẩu, sinh viên thuê trọ, và các hộ gia đình từ nơi khác đến thuê để kinh doanh dịch vụ. Do dân cư đa dạng và phức tạp, phần mềm cần giúp ban quản lý nắm bắt và cập nhật thông tin về biến động nhân khẩu, quản lý hộ khẩu, nhân khẩu, và các hoạt động liên quan đến các đoàn thể.

Ban quản lý gồm một tổ trưởng, một tổ phó và các cán bộ khác. Tổ trưởng và tổ phó có quyền thực hiện tất cả các nghiệp vụ quản lý, trong khi các cán bộ phụ trách từng công việc cụ thể.

2. Quản Lý Hộ Khẩu và Nhân Khẩu
Phần mềm cần cung cấp chức năng quản lý chi tiết thông tin về hộ khẩu và nhân khẩu. Các thông tin của mỗi hộ gia đình được lưu trữ theo sổ hộ khẩu, bao gồm:

Thông tin hộ khẩu: Số hộ khẩu, họ tên chủ hộ, địa chỉ nhà (số nhà, đường, phường, quận).
Thông tin nhân khẩu: Bao gồm họ tên, ngày tháng năm sinh, nơi sinh, nguyên quán, dân tộc, nghề nghiệp, nơi làm việc, số CMND/CCCD, ngày cấp, nơi cấp, ngày đăng ký thường trú, địa chỉ nơi thường trú trước khi chuyển đến, và quan hệ với chủ hộ (nếu không phải chủ hộ).
Ngoài ra, phần mềm cần có khả năng quản lý các hoạt động biến đổi nhân khẩu như:

Thêm nhân khẩu mới: Khi một gia đình có thêm thành viên, thông tin nhân khẩu mới sẽ được thêm vào với đầy đủ chi tiết.
Thay đổi nhân khẩu: Khi một người chuyển đi, qua đời hoặc thay đổi thông tin cá nhân, hệ thống sẽ cập nhật các chi tiết này.
Tách hộ: Khi một hộ gia đình tách thành nhiều hộ mới, hệ thống sẽ tạo mới sổ hộ khẩu cho các hộ này.
Tạm vắng và tạm trú: Khi một nhân khẩu đi xa dài ngày hoặc có người từ nơi khác đến cư trú tạm thời, phần mềm sẽ cấp giấy tạm vắng hoặc tạm trú theo yêu cầu.
3. Quản Lý Tầng và Tổ Dân Cư
Ban quản lý cần xác định số tầng trong chung cư và số tổ dân cư trên mỗi tầng. Mỗi tổ dân cư có thể bao gồm hộ gia đình, sinh viên thuê trọ, hoặc các hộ kinh doanh. Các thông tin về tầng và tổ dân cư sẽ được ghi nhận để dễ dàng theo dõi và quản lý.

4. Quản Lý Cán Bộ
Hệ thống sẽ quản lý thông tin của các cán bộ quản lý, bao gồm tổ trưởng, tổ phó và các cán bộ phụ trách. Tổ trưởng và tổ phó có quyền truy cập và thực hiện tất cả các nghiệp vụ trong phần mềm, trong khi các cán bộ khác sẽ chỉ có quyền thực hiện nghiệp vụ được phân công.

5. Báo Cáo và Thống Kê
Phần mềm cần hỗ trợ các báo cáo và thống kê liên quan đến:

Số lượng hộ khẩu, nhân khẩu.
Biến động nhân khẩu (thêm mới, chuyển đi, qua đời).
Các hoạt động cấp giấy tạm vắng, tạm trú.
Các báo cáo có thể được xuất dưới dạng file PDF hoặc Excel để lưu trữ và trình bày khi cần.

6. Quản Lý Quyền Hạn Người Dùng
Mỗi người dùng hệ thống (tổ trưởng, tổ phó, cán bộ) sẽ được phân quyền cụ thể, đảm bảo chỉ những người có thẩm quyền mới được thực hiện các hành động quan trọng như thêm/sửa/xóa thông tin nhân khẩu, hộ khẩu.

7. Các Quy Trình Chính
Thêm hộ khẩu mới: Nhập thông tin hộ khẩu và lưu trữ vào cơ sở dữ liệu.
Thêm nhân khẩu mới: Khi có nhân khẩu mới, nhập thông tin cá nhân chi tiết và liên kết với hộ khẩu tương ứng.
Thay đổi thông tin nhân khẩu: Khi một người thay đổi thông tin cá nhân (chuyển đi, qua đời), cập nhật chi tiết trong hệ thống.
Tạm vắng và tạm trú: Quản lý và theo dõi tình trạng tạm vắng/tạm trú của nhân khẩu và cấp giấy tạm vắng/tạm trú.
Báo cáo và thống kê: Xem và xuất các báo cáo về tình hình dân cư, hộ khẩu, biến động nhân khẩu.
8. Yêu Cầu Bảo Mật
Dữ liệu về nhân khẩu và hộ khẩu là thông tin nhạy cảm, do đó phần mềm cần có các cơ chế bảo mật như xác thực người dùng, mã hóa dữ liệu, và phân quyền rõ ràng để đảm bảo tính riêng tư và an toàn dữ liệu.

9. Giao Diện Người Dùng
Giao diện phần mềm sẽ đơn giản, dễ sử dụng, với các form nhập liệu cho việc thêm/sửa/xóa hộ khẩu, nhân khẩu, các chức năng cấp giấy tạm trú/tạm vắng, và xem báo cáo. Giao diện cần trực quan để hỗ trợ người dùng không quen thuộc với công nghệ.
