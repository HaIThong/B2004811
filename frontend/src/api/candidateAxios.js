import axios from "axios";
// import queryString from 'query-string';

const candidateAxios = axios.create({
  baseURL: process.env.REACT_APP_API_URL + '/api',
  // paramsSerializer: params => queryString.stringify(params),
});
//axios.create() được dùng để tạo ra một instance axios với các thiết lập tuỳ chỉnh.
//baseURL: URL gốc của API. Được lấy từ biến môi trường REACT_APP_API_URL (ví dụ: http://localhost:8000). Mọi yêu cầu gửi đi sẽ tự động thêm /api vào trước đường dẫn (endpoint).

candidateAxios.interceptors.request.use(
  (config) => {
    const token = localStorage.getItem('candidate_jwt');
    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }

    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);
//Mục đích: Đoạn này được sử dụng để chặn các yêu cầu trước khi chúng được gửi đi. Nó cho phép bạn thực hiện các thao tác, như thêm token xác thực vào header của yêu cầu.
//localStorage.getItem('candidate_jwt'): Lấy JWT token từ localStorage. Token này sẽ được sử dụng để xác thực ứng viên khi gửi yêu cầu đến server.
//config.headers.Authorization = 'Bearer ' + token: Nếu có token, nó sẽ được thêm vào header Authorization của yêu cầu dưới dạng Bearer Token
//Nếu không có lỗi, config sẽ được trả về để tiếp tục gửi yêu cầu. Nếu có lỗi, promise bị từ chối và trả về lỗi.
candidateAxios.interceptors.response.use(
  (response) => {
    if (response && response.data) {
      return response.data;
    }

    return response;
  },
  (error) => {
    console.log('>>Error:', error);
    return Promise.reject(error);
  }
);
//Mục đích: Chặn phản hồi từ server trước khi nó được trả về cho ứng dụng, cho phép xử lý dữ liệu hoặc lỗi một cách hiệu quả.
//response.data: Nếu phản hồi có chứa dữ liệu (response.data), nó sẽ chỉ trả về phần dữ liệu này, bỏ qua những thông tin không cần thiết khác (như status code, headers, v.v.).
//Nếu có lỗi từ server, nó sẽ log lỗi ra console (console.log('>>Error:', error)) và trả về lỗi để xử lý tiếp trong ứng dụng.
export default candidateAxios;
//Đoạn mã này tạo ra một API client tuỳ chỉnh (candidateAxios) giúp:
//Thêm JWT token từ localStorage vào mọi yêu cầu để xác thực.
//Đơn giản hóa việc xử lý phản hồi từ server bằng cách chỉ trả về dữ liệu quan trọng.
//Quản lý lỗi một cách hiệu quả.
// là cách làm phổ biến để thiết lập các yêu cầu API trong các ứng dụng React sử dụng token để bảo mật.

//JWT (JSON Web Token) là một tiêu chuẩn mở cho phép truyền thông tin an toàn giữa hai bên (thường là client và server) dưới dạng đối tượng JSON. JWT được mã hóa và có thể được xác thực bằng chữ ký số (thường là HMAC hoặc RSA).
//JWT bao gồm ba phần:
//Header: Chứa thông tin về loại token và thuật toán ký.
//Payload: Chứa thông tin (claims) như thông tin người dùng, quyền hạn...
//Signature: Dùng để xác minh tính toàn vẹn của token.