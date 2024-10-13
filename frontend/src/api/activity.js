import candidateAxios from "./candidateAxios";
//Đây là lệnh import candidateAxios, một phiên bản axios được cấu hình để sử dụng cho các yêu cầu API liên quan đến ứng viên
// (có thể đã được thiết lập với các thông tin như baseURL, headers…).

const prefix = "/activities"; //Biến prefix chứa chuỗi đường dẫn gốc /activities. Đây là phần cơ bản của đường dẫn API sẽ được sử dụng trong các phương thức dưới đây để gọi API hoạt động.

const activityApi = {
  getByCurrentCandidateProfile: () => {
    return candidateAxios.get(`${prefix}/getByCurrentCandidateProfile`);
  }, //Gọi API để lấy danh sách hoạt động liên quan đến hồ sơ của ứng viên hiện tại.
    //Cách hoạt động: Gửi một yêu cầu GET tới endpoint /activities/getByCurrentCandidateProfile
  create: (data) => {
    return candidateAxios.post(`${prefix}`, data);
  },//Mục đích: Tạo một hoạt động mới.Cách hoạt động: Gửi một yêu cầu POST tới endpoint /activities với dữ liệu hoạt động (được truyền vào dưới dạng data)
  destroy: (id) => {
    return candidateAxios.delete(`${prefix}/${id}`);
  }, //Mục đích: Xóa một hoạt động dựa trên id của hoạt động đó.Cách hoạt động: Gửi một yêu cầu DELETE tới endpoint /activities/{id}, trong đó {id} là ID của hoạt động cần xóa.
  update: (id, data) => {
    return candidateAxios.patch(`${prefix}/${id}`, data);
  },//Mục đích: Cập nhật thông tin của một hoạt động dựa trên id và dữ liệu data.Cách hoạt động: Gửi một yêu cầu PATCH tới endpoint /activities/{id} với dữ liệu cập nhật (được truyền vào dưới dạng data).
}
//Đây là một object (activityApi) chứa các phương thức API mà bạn sẽ sử dụng để tương tác với hệ thống quản lý hoạt động liên quan đến ứng viên.

export default activityApi;