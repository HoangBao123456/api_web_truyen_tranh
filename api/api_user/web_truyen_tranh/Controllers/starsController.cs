using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class starsController : ControllerBase
    {
        private IstarsBusiness _truyenBusiness;
        public starsController(IstarsBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_by-star/{star}")]
        [HttpGet]
        public List<starsModel> GetDatabyStar(string star)
        {
            return _truyenBusiness.GetDatabyStar(star);
        }
        [Route("get_by-count/{count}")]
        [HttpGet]
        public List<starsModel> GetDatabyCount(string count)
        {
            return _truyenBusiness.GetDatabyCount(count);
        }
    }
}
