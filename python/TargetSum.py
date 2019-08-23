class Solution(object):
    def findTargetSumWays(self, nums, S):
        """
        :type nums: List[int]
        :type S: int
        :rtype: int
        """
        
        if sum(nums) < S: return 0
        if (sum(nums) + S) & 1: return 0

        target = (sum(nums) + S) / 2
        dp = [0] * (target+1)
        dp[0] = 1

        for i in range(len(nums)):
            for val in range(target, nums[i]-1, -1):
                if dp[val-nums[i]]:
                    dp[val] += dp[val-nums[i]]
        return dp[-1]
        