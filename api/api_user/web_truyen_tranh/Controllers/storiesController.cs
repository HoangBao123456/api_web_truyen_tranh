using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using BusinessLogicLayer;
using DataModel;
using DataAccessLayer;

namespace web_truyen_tranh.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class storiesController : ControllerBase
    {
        private IstoriesBusiness _truyenBusiness;
        public storiesController(IstoriesBusiness truyenBusiness)
        {
            _truyenBusiness = truyenBusiness;
        }
        [Route("get_list_stories")]
        [HttpGet]
        public List<storiesModel> GetData()
        {
            return _truyenBusiness.GetData();
        }
        [Route("get_by-id/{id}")]
        [HttpGet]
        public storiesModel GetDatabyId(string id)
        {
            return _truyenBusiness.GetDatabyId(id);
        }
        [Route("get_by-name/{name}")]
        [HttpGet]
        public storiesModel GetDatabyName(string name)
        {
            return _truyenBusiness.GetDatabyName(name);
        }
    }
}
